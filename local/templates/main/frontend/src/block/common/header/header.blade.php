

<header class="{{ $block }}">
    <div class="{{ $block->elem('container') }}">
        <a href="/" class="{{ $block->elem('logo-wrapper') }}">
            <img class="{{ $block->elem('logo-img') }}" src="<?=SITE_TEMPLATE_PATH."/assets/images/logo.png"?>" alt="logo">
            <p class="{{ $block->elem('logo-text') }}">Галактический<br>вестник</p>
        </a>
		{!! $menu !!}
    </div>
</header>
