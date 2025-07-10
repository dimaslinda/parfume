<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/general/favicon.png') }}">
    {!! seo() !!}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wdth,wght@0,62.5..100,100..900;1,62.5..100,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "PT. Agung Wangi Sentosa",
  "url": "https://agungwangisentosa.id/",
  "logo": "https://agungwangisentosa.id/img/general/logo.png",
  "brand": {
    "@type": "Brand",
    "name": "Muntru"
  },
  "description": "PT. Agung Wangi Sentosa adalah perusahaan yang bergerak di bidang produk kecantikan dan perawatan diri, dengan fokus utama pada parfum berkualitas tinggi.",
  "contactPoint": [
    {
      "@type": "ContactPoint",
      "telephone": "+62-812-1459-9739",
      "contactType": "customer service",
      "url": "https://api.whatsapp.com/send?phone=6281214599739"
    },
    {
      "@type": "ContactPoint",
      "email": "agungwangisentosa@gmail.com",
      "contactType": "customer service"
    }
  ],
  "sameAs": [
    "https://instagram.com/muntruparfum"
  ]
}
</script>
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Muntru Parfum",
  "url": "https://agungwangisentosa.id/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://agungwangisentosa.id/search?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>

    @yield('kepala')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-poppins">
    @include('layouts.navbar')
    @yield('konten')
    @include('layouts.footer')
