<title>{{ (app('title') == Conf::get('app.sitename')) ? app('title') . ' - ' . Conf::get('seo.default.seo_title') : app('title') }}</title>
<meta name="description" content="{{ (isset($seo_description)) ? $seo_description : config('seo.default.seo_description') }}">
<meta name="keywords" content="{{ (isset($seo_keywords)) ? $seo_keywords : config('seo.default.seo_keywords') }}">
<meta name="robots" content="{{ Conf::get('seo.index') }}"/>