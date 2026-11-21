<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="web_standard" name="shell-type">
    <title>@yield('title', 'Maximize Business Marketing')</title>
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Manrope:wght@600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
    <style>
        @layer base {
            html,
            body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main>:first-child {
                margin-top: 0 !important;
            }

            main>:last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-container-high": "#e8e8e5",
                        "secondary-fixed-dim": "#7ed4da",
                        "tertiary-fixed-dim": "#b3cad8",
                        surface: "#f9f9f6",
                        "on-tertiary-container": "#7d94a1",
                        "on-surface": "#1a1c1b",
                        "on-background": "#1a1c1b",
                        "surface-container": "#eeeeeb",
                        "tertiary-container": "#152c37",
                        "secondary-fixed": "#9af1f7",
                        "surface-dim": "#dadad7",
                        "on-error": "#ffffff",
                        "mist-border": "#DCE6E8",
                        "primary-fixed-dim": "#b0c9e3",
                        "surface-bright": "#f9f9f6",
                        "primary-container": "#102b3f",
                        outline: "#73777d",
                        "inverse-on-surface": "#f1f1ee",
                        "inverse-surface": "#2f312f",
                        "primary-fixed": "#cce5ff",
                        "secondary-container": "#9af1f7",
                        secondary: "#00696f",
                        "surface-container-low": "#f4f4f1",
                        "on-primary": "#ffffff",
                        "inverse-primary": "#b0c9e3",
                        "on-tertiary": "#ffffff",
                        error: "#ba1a1a",
                        "on-secondary-fixed-variant": "#004f53",
                        "on-error-container": "#93000a",
                        "on-secondary-fixed": "#002022",
                        "on-primary-fixed-variant": "#30495e",
                        "surface-container-lowest": "#ffffff",
                        "on-surface-variant": "#43474c",
                        "on-primary-fixed": "#001d31",
                        primary: "#001626",
                        "surface-variant": "#e2e3e0",
                        "on-primary-container": "#7a93ab",
                        "tertiary-fixed": "#cee6f4",
                        "on-secondary-container": "#007075",
                        "outline-variant": "#c3c7cd",
                        "on-tertiary-fixed-variant": "#344a55",
                        "on-tertiary-fixed": "#061e28",
                        "on-secondary": "#ffffff",
                        "error-container": "#ffdad6",
                        background: "#f9f9f6",
                        "surface-tint": "#486177",
                        tertiary: "#001721",
                        "surface-container-highest": "#e2e3e0"
                    },
                    borderRadius: {
                        DEFAULT: "0.125rem",
                        lg: "0.25rem",
                        xl: "0.5rem",
                        full: "0.75rem"
                    },
                    spacing: {
                        "space-xs": "0.5rem",
                        gutter: "1.5rem",
                        "gutter-mobile": "1rem",
                        "space-sm": "1rem",
                        "space-md": "1.5rem",
                        "space-lg": "2.5rem",
                        "margin-mobile": "1.25rem",
                        "space-xl": "4.5rem",
                        margin: "4rem"
                    },
                    fontFamily: {
                        "headline-xl": ["Manrope"],
                        "label-md": ["Inter"],
                        eyebrow: ["Inter"],
                        "body-sm": ["Inter"],
                        "headline-sm": ["Manrope"],
                        "body-md": ["Inter"],
                        "headline-xl-mobile": ["Manrope"],
                        "label-sm": ["Inter"],
                        "headline-md": ["Manrope"],
                        "headline-lg-mobile": ["Manrope"],
                        "headline-lg": ["Manrope"],
                        "body-lg": ["Inter"]
                    },
                    fontSize: {
                        "headline-xl": ["3.5rem", {
                            lineHeight: "4.25rem",
                            letterSpacing: "-0.03em",
                            fontWeight: "700"
                        }],
                        "label-md": ["0.875rem", {
                            lineHeight: "1.25rem",
                            letterSpacing: "0.01em",
                            fontWeight: "500"
                        }],
                        eyebrow: ["0.75rem", {
                            lineHeight: "1rem",
                            letterSpacing: "0.08em",
                            fontWeight: "700"
                        }],
                        "body-sm": ["0.875rem", {
                            lineHeight: "1.25rem",
                            letterSpacing: "0",
                            fontWeight: "400"
                        }],
                        "headline-sm": ["1.25rem", {
                            lineHeight: "1.75rem",
                            letterSpacing: "0",
                            fontWeight: "600"
                        }],
                        "body-md": ["1rem", {
                            lineHeight: "1.5rem",
                            letterSpacing: "0",
                            fontWeight: "400"
                        }],
                        "headline-xl-mobile": ["2.25rem", {
                            lineHeight: "2.75rem",
                            letterSpacing: "-0.02em",
                            fontWeight: "700"
                        }],
                        "label-sm": ["0.75rem", {
                            lineHeight: "1rem",
                            letterSpacing: "0.02em",
                            fontWeight: "500"
                        }],
                        "headline-md": ["1.75rem", {
                            lineHeight: "2.25rem",
                            letterSpacing: "-0.01em",
                            fontWeight: "600"
                        }],
                        "headline-lg-mobile": ["1.75rem", {
                            lineHeight: "2.25rem",
                            letterSpacing: "-0.01em",
                            fontWeight: "600"
                        }],
                        "headline-lg": ["2.5rem", {
                            lineHeight: "3rem",
                            letterSpacing: "-0.02em",
                            fontWeight: "600"
                        }],
                        "body-lg": ["1.125rem", {
                            lineHeight: "1.75rem",
                            letterSpacing: "-0.01em",
                            fontWeight: "400"
                        }]
                    }
                }
            }
        };
    </script>
    <style id="theme-blue-overrides">
        :root {
            --midnight-navy: #10263F;
            --royal-blue: #3156A3;
            --champagne-gold: #C7A46A;
            --warm-ivory: #F7F4EE;
            --charcoal: #263443;
        }

        body,
        .bg-surface,
        .bg-surface-container-lowest,
        .bg-surface-container-low {
            background-color: #F7F4EE !important;
        }

        body,
        .text-on-surface {
            color: #263443 !important;
        }

        p,
        label {
            color: #263443;
        }

        .text-on-surface-variant {
            color: #34485e !important;
        }

        .text-primary,
        h1,
        h2,
        h3,
        h4 {
            color: #10263F !important;
        }

        .bg-primary,
        .bg-primary-container,
        .bg-tertiary-container\/80,
        .bg-tertiary-container\/50,
        footer {
            background-color: #10263F !important;
        }

        .bg-primary h1,
        .bg-primary h2,
        .bg-primary h3,
        .bg-primary h4,
        .bg-primary-container h1,
        .bg-primary-container h2,
        .bg-primary-container h3,
        .bg-primary-container h4,
        footer h1,
        footer h2,
        footer h3,
        footer h4 {
            color: #FFFFFF !important;
        }

        .bg-primary p,
        .bg-primary-container p,
        footer p {
            color: #E2E8F0 !important;
        }

        .bg-primary .text-on-primary-container,
        .bg-primary-container .text-on-primary-container,
        footer .text-on-primary-container {
            color: #CBD5E1 !important;
        }

        .bg-primary .text-on-primary-container\/70,
        .bg-primary-container .text-on-primary-container\/70,
        footer .text-on-primary-container\/70 {
            color: #94A3B8 !important;
        }

        .bg-primary .text-primary-fixed-dim,
        .bg-primary-container .text-primary-fixed-dim {
            color: #E2E8F0 !important;
        }

        .text-secondary,
        [class*="text-secondary"] {
            color: #C7A46A !important;
        }

        .bg-secondary {
            background-color: #3156A3 !important;
        }

        .bg-surface-container {
            background-color: #ede9df !important;
        }

        .bg-secondary-container,
        .bg-secondary-container\/40,
        .bg-secondary-fixed {
            background-color: #f3ebd8 !important;
        }

        .bg-secondary\/5 {
            background-color: #fbf9f4 !important;
        }

        .bg-secondary\/15,
        .bg-secondary\/20 {
            background-color: #f3ebd8 !important;
        }

        .text-on-secondary-fixed {
            color: #10263F !important;
        }

        .text-secondary-container,
        .text-on-secondary-container {
            color: #8C6D37 !important;
        }

        .border-secondary,
        .border-l-secondary,
        .focus\:border-secondary:focus {
            border-color: #C7A46A !important;
        }

        .border-secondary\/20,
        .border-secondary-container\/40 {
            border-color: rgba(199, 164, 106, 0.4) !important;
        }

        .hover\:border-secondary:hover,
        .hover\:border-secondary\/60:hover {
            border-color: #3156A3 !important;
        }

        .border-mist-border,
        .border-mist-border\/60 {
            border-color: #d8d2c4 !important;
        }

        .focus\:ring-secondary:focus {
            --tw-ring-color: #3156A3 !important;
        }

        input[type="checkbox"].text-secondary {
            color: #3156A3 !important;
        }

        a.bg-secondary,
        button.bg-secondary,
        button[type="submit"].bg-secondary {
            background-color: #3156A3 !important;
            color: #ffffff !important;
        }

        a.bg-secondary:hover,
        button.bg-secondary:hover,
        button[type="submit"].bg-secondary:hover {
            background-color: #10263F !important;
            color: #ffffff !important;
        }

        .lg\:col-span-5 span.bg-secondary,
        .lg\:col-span-5 .w-1\.5.h-1\.5.bg-secondary,
        .lg\:col-span-5 .w-1.h-1.bg-secondary {
            background-color: #C7A46A !important;
        }

        .lg\:col-span-5 .text-secondary {
            color: #A07830 !important;
        }

        .lg\:col-span-5 .bg-secondary-container\/40 {
            background-color: #f3ebd8 !important;
        }

        .lg\:col-span-5 .text-on-secondary-container {
            color: #6d4f17 !important;
        }

        .lg\:col-span-5 .border-secondary\/20 {
            border-color: #C7A46A !important;
        }

        .lg\:col-span-5 .border-l-secondary {
            border-left-color: #C7A46A !important;
        }

        .lg\:col-span-5 .bg-secondary {
            background-color: #3156A3 !important;
        }

        .lg\:col-span-5 .bg-secondary\/15 {
            background-color: #f3ebd8 !important;
        }

        .lg\:col-span-5 .bg-secondary\/5 {
            background-color: #faf7f0 !important;
        }

        svg line[stroke="#00696f"],
        svg polygon[stroke="#DCE6E8"] {
            stroke: #C7A46A !important;
        }

        svg circle[stroke="#00696f"],
        svg circle[fill="#00696f"] {
            stroke: #3156A3 !important;
            fill: #3156A3 !important;
        }

        svg circle[fill="#9af1f7"] {
            fill: #C7A46A !important;
        }

        svg circle[fill="#102b3f"] {
            fill: #10263F !important;
        }

        header nav a,
        header nav button {
            color: #10263F !important;
            font-weight: 600 !important;
        }

        header nav a:hover,
        header nav button:hover {
            color: #3156A3 !important;
        }

        header nav .material-symbols-outlined {
            color: #10263F !important;
        }

        input::placeholder,
        textarea::placeholder {
            color: #64748B !important;
            opacity: 1 !important;
        }

        input,
        textarea,
        select {
            color: #10263F !important;
        }
    </style>
    @stack('styles')
</head>
<body class="bg-surface font-body-md text-body-md text-on-surface antialiased">

    @include('partials.header')

    <main class="w-full pt-20 bg-surface min-h-[calc(100vh-20rem)]">
        <div class="flex flex-col w-full">
            @yield('content')
        </div>
    </main>

    @include('partials.footer')

    @stack('scripts')
</body>
</html>
