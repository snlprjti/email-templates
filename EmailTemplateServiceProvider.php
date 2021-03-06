<?php

namespace Modules\EmailTemplate;

use Illuminate\Support\ServiceProvider;
use Modules\EmailTemplate\Entities\EmailTemplate;
use Modules\EmailTemplate\Observers\EmailTemplateObservers;

class EmailTemplateServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
     */
    protected $moduleName = 'EmailTemplate';

    /**
     * @var string $moduleNameLower
     */
    protected $moduleNameLower = 'emailtemplate';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
//        $this->registerTranslations();
//        $this->registerConfig();
//        $this->registerViews();
        $this->loadMigrationsFrom(__DIR__.('/Database/Migrations'));
        $this->loadRoutesFrom(__DIR__.('/routes/api.php'));

        $this->publishes([
            __DIR__."/config/email_template.php" => config_path("email_template.php"),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
//
//    /**
//     * Register config.
//     *
//     * @return void
//     */
//    protected function registerConfig()
//    {
//        $this->publishes([
//            module_path($this->moduleName, 'Config/config.php') => config_path($this->moduleNameLower . '.php'),
//        ], 'config');
//        $this->mergeConfigFrom(
//            module_path($this->moduleName, 'Config/config.php'), $this->moduleNameLower
//        );
//        $this->mergeConfigFrom(
//            module_path($this->moduleName, 'Config/email_template.php'), 'email_template',
//        );
//        $this->mergeConfigFrom(
//            module_path($this->moduleName, 'Config/email_variable.php'), 'email_variable',
//        );
//    }
//
//    /**
//     * Register views.
//     *
//     * @return void
//     */
//    public function registerViews()
//    {
//        $viewPath = resource_path('views/modules/' . $this->moduleNameLower);
//
//        $sourcePath = module_path($this->moduleName, 'Resources/views');
//
//        $this->publishes([
//            $sourcePath => $viewPath
//        ], ['views', $this->moduleNameLower . '-module-views']);
//
//        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->moduleNameLower);
//    }
//
//    /**
//     * Register translations.
//     *
//     * @return void
//     */
//    public function registerTranslations()
//    {
//        $langPath = resource_path('lang/modules/' . $this->moduleNameLower);
//
//        if (is_dir($langPath)) {
//            $this->loadTranslationsFrom($langPath, $this->moduleNameLower);
//        } else {
//            $this->loadTranslationsFrom(module_path($this->moduleName, 'Resources/lang'), $this->moduleNameLower);
//        }
//    }
//
//    /**
//     * Get the services provided by the provider.
//     *
//     * @return array
//     */
//    public function provides()
//    {
//        return [];
//    }
//
//    private function getPublishableViewPaths(): array
//    {
//        $paths = [];
//        foreach (\Config::get('view.paths') as $path) {
//            if (is_dir($path . '/modules/' . $this->moduleNameLower)) {
//                $paths[] = $path . '/modules/' . $this->moduleNameLower;
//            }
//        }
//        return $paths;
//    }
//
//    public function registerObservers(): void
//    {
//        EmailTemplate::observe(EmailTemplateObservers::class);
//    }
}
