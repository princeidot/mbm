<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Clean URL key => Blade view slug (pages.*).
     * The key also drives the route name suffix used in routes/web.php.
     */
    protected array $map = [
        'home' => 'mbm_enterprise_channel_partner_marketing_homepage',
        'channel-marketing-strategy' => 'mbm_channel_marketing_strategy_service_page',
        'partner-enablement' => 'mbm_partner_enablement_service_page',
        'partner-education-training' => 'mbm_partner_education_training_service_page',
        'partner-activation-engagement' => 'mbm_partner_activation_engagement_service_page',
        'through-channel-demand-generation' => 'mbm_through_channel_demand_generation_service_page',
        'mdf-channel-performance' => 'mbm_mdf_channel_performance_service_page',
        'channel-growth-consultation' => 'mbm_channel_growth_consultation',
        'channel-marketing-assessment' => 'mbm_channel_marketing_assessment',
        'our-approach' => 'mbm_our_approach',
        'industries' => 'mbm_industries_page_editorial_photography',
        'about' => 'mbm_about_maximize_business_marketing',
        'contact-us' => 'mbm_contact_us_elevated_editorial_standardized_footer',
        'modal-components' => 'mbm_global_reusable_modal_components',
    ];

    protected array $titles = [
        'home' => 'Maximize Business Marketing | Enterprise Partner & Channel Advisory',
        'channel-marketing-strategy' => 'Maximize Business Marketing | Enterprise Partner & Channel Advisory',
        'partner-enablement' => 'Maximize Business Marketing | Enterprise Partner & Channel Advisory',
        'partner-education-training' => 'Maximize Business Marketing | Enterprise Partner & Channel Advisory',
        'partner-activation-engagement' => 'Maximize Business Marketing | Enterprise Partner & Channel Advisory',
        'through-channel-demand-generation' => 'Maximize Business Marketing | Enterprise Partner & Channel Advisory',
        'mdf-channel-performance' => 'Maximize Business Marketing | Enterprise Partner & Channel Advisory',
        'channel-growth-consultation' => 'Maximize Business Marketing',
        'channel-marketing-assessment' => 'Maximize Business Marketing',
        'our-approach' => 'Our Approach | Maximize Business Marketing',
        'industries' => 'Industries | Channel Marketing for Complex Sectors | Maximize Business Marketing',
        'about' => 'About MBM | Maximize Business Marketing',
        'contact-us' => 'Contact Us — Maximize Business Marketing (MBM)',
        'modal-components' => 'MBM - Global Reusable Modal Components Design System',
    ];

    public function home(): View
    {
        return $this->render('home');
    }

    public function show(): View
    {
        $name = request()->route()->getName();
        $key = $name === 'home' ? 'home' : str_replace('page.', '', $name);

        if (! isset($this->map[$key])) {
            abort(404, "Page [{$key}] not found.");
        }

        return $this->render($key);
    }

    protected function render(string $key): View
    {
        $view = 'pages.' . $this->map[$key];

        if (! view()->exists($view)) {
            abort(404, "View [{$view}] not found.");
        }

        $title = $this->titles[$key] ?? ucwords(str_replace(['-', '_'], ' ', $key));

        return view($view, compact('title', 'key'));
    }
}
