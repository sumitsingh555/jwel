@extends('frontend/main')
@push('meta')
    <!--  Title -->
    <title>page_title</title>

    <!-- Required meta tags -->
    <meta name="title" content="page_title" />
    <meta name="description" content="page_description" />
    <meta name="keywords" content="page_keywords" />

    <meta name="robots" content="index, follow" />
    <!-- Twitter Meta -->
    <meta name="twitter:title" content="page_title">
    <meta name="twitter:description" content="page_description">
    <meta name="twitter:image" content="{{ asset('/public/frontend/assets/img/logos/logo.png') }}">

    <!-- Facebook Meta -->
    <meta property="og:url" content="{{ asset('/') }}">
    <meta property="og:title" content="page_title">
    <meta property="og:description" content="page_description">
    <meta property="og:image" content="{{ asset('/public/frontend/assets/img/logos/logo.png') }}">
    <meta property="og:image:secure_url" content="{{ asset('/public/frontend/assets/img/logos/logo.png') }}">
    <meta name="classification" content="page_title" />
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public/frontend/assets/img/logos/favicon-white.png') }}" />
    <link rel="icon" href="{{ asset('/public/frontend/assets/img/logos/favicon-original.png') }}" id="light-scheme-icon">
    <link rel="icon" href="{{ asset('/public/frontend/assets/img/logos/favicon-white.png') }}" id="dark-scheme-icon">
    <link rel="canonical" href="{{ asset('/') }}" />

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "website_name",
            "alternateName": "website_alternate_name",
            "url": "https://www.website_url.com/",
            "logo": "https://www.website_url.com/logo_path.png",
            "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": "+91-0000000000",
                "contactType": "customer service",
                "areaServed": "IN",
                "availableLanguage": "English"
            }, {
                "@type": "ContactPoint",
                "telephone": "+91-0000000000",
                "contactType": "technical support",
                "areaServed": "IN",
                "availableLanguage": "English"
            }],
            "sameAs": [
                "https://www.facebook.com/xxxxxxxxxxxxxxxx",
                "https://twitter.com/xxxxxxxxxxxxxxxx",
                "https://www.instagram.com/xxxxxxxxxxxxxxxx/",
                "https://www.linkedin.com/xxxxxxxxxxxxxxxx/",
                "https://www.flickr.com/photos/xxxxxxxxxxxxxxxx/"
            ]
        }
    </script>
@endpush
@push('styles')
<link rel="stylesheet" href="{{ asset('/public/frontend/assets/plugins/do-not-edit/css/example.min.css') }}">
@endpush
@section('content')

    <img src="{{asset('/timthumb.php')}}?src={{asset('/public/frontend/assets/img/bg/bg1.png')}}&w=3300&q=0&f=0&a=tl&zc=1" class="w-100" alt="Background One">

@endsection
@push('scripts')
<script src="{{ asset('/public/frontend/assets/js/example.min.js') }}"></script>
@endpush