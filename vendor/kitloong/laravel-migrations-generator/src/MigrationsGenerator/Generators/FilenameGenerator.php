<?php

namespace MigrationsGenerator\Generators;

use Carbon\Carbon;
use Illuminate\Support\Str;
use MigrationsGenerator\MigrationsGeneratorSetting;

class FilenameGenerator
{
    private $tableNameGenerator;

    public function __construct(TableNameGenerator $tableNameGenerator)
    {
        $this->tableNameGenerator = $tableNameGenerator;
    }

    /**
     * Makes class name for table migration.
     *
     * @param  string  $table  Table name.
     * @return string
     */
    public function makeTableClassName(string $table): string
    {
        $className = $this->makeClassName(
            app(MigrationsGeneratorSetting::class)->getTableFilename(),
            $table
        );
        return Str::studly($className);
    }

    /**
     * Makes file path for table migration.
     *
     * @param  string  $table  Table name.
     * @return string
     */
    public function makeTablePath(string $table): string
    {
        return $this->makeFilename(
            app(MigrationsGeneratorSetting::class)->getTableFilename(),
            app(MigrationsGeneratorSetting::class)->getDate()->format('Y_m_d_His'),
            $table
        );
    }

    /**
     * Makes class name for view migration.
     *
     * @param  string  $view  View name.
     * @return string
     */
    public function makeViewClassName(string $view): string
    {
        $className = $this->makeClassName(
            app(MigrationsGeneratorSetting::class)->getViewFilename(),
            $view
        );
        return Str::studly($className);
    }

    /**
     * Makes file path for view migration.
     *
     * @param  string  $view  View name.
     * @return string
     */
    public function makeViewPath(string $view): string
    {
        return $this->makeFilename(
            app(MigrationsGeneratorSetting::class)->getViewFilename(),
            Carbon::parse(app(MigrationsGeneratorSetting::class)->getDate())->addSecond()->format('Y_m_d_His'),
            $view
        );
    }

    /**
     * Makes class name for foreign key migration.
     *
     * @param  string  $table  Table name.
     * @return string
     */
    public function makeForeignKeyClassName(string $table): string
    {
        $className = $this->makeClassName(
            app(MigrationsGeneratorSetting::class)->getFkFilename(),
            $table
        );
        return Str::studly($className);
    }

    /**
     * Makes file path for foreign key migration.
     *
     * @param  string  $table
     * @return string
     */
    public function makeForeignKeyPath(string $table): string
    {
        return $this->makeFilename(
            app(MigrationsGeneratorSetting::class)->getFkFilename(),
            Carbon::parse(app(MigrationsGeneratorSetting::class)->getDate())->addSecond()->format('Y_m_d_His'),
            $table
        );
    }

    /**
     * Makes file path for temporary `up` migration.
     *
     * @return string
     */
    public function makeUpTempPath(): string
    {
        $path = app(MigrationsGeneratorSetting::class)->getPath();
        return "$path/lmg-up-temp";
    }

    /**
     * Makes file path for temporary `down` migration.
     *
     * @return string
     */
    public function makeDownTempPath(): string
    {
        $path = app(MigrationsGeneratorSetting::class)->getPath();
        return "$path/lmg-down-temp";
    }

    /**
     * Makes migration filename by given naming pattern.
     *
     * @param  string  $pattern  Naming pattern for migration filename.
     * @param  string  $datetimePrefix  Current datetime for filename prefix.
     * @param  string  $table  Table name.
     * @return string
     */
    private function makeFilename(string $pattern, string $datetimePrefix, string $table): string
    {
        $path     = app(MigrationsGeneratorSetting::class)->getPath();
        $filename = $pattern;
        $replace  = [
            '[datetime_prefix]' => $datetimePrefix,
            '[table]'           => $this->stripTablePrefix($table),
        ];
        $filename = str_replace(array_keys($replace), $replace, $filename);
        return "$path/$filename";
    }

    /**
     * Makes migration class name by given naming pattern.
     *
     * @param  string  $pattern  Naming pattern for class.
     * @param  string  $table  Table name.
     * @return string
     */
    private function makeClassName(string $pattern, string $table): string
    {
        $className = $pattern;
        $replace   = [
            '[datetime_prefix]_' => '',
            '[table]'            => $this->stripTablePrefix($table),
            '.php'               => '',
        ];
        return str_replace(array_keys($replace), $replace, $className);
    }

    /**
     * Strips prefix from table name.
     *
     * @param  string  $table  Table name.
     * @return string Table name without prefix.
     */
    private function stripTablePrefix(string $table): string
    {
        $tableNameEscaped = (string) preg_replace('/[^a-zA-Z0-9_]/', '_', $table);
        return $this->tableNameGenerator->stripPrefix($tableNameEscaped);
    }
}
