@if($USER->IsAuthorized() || !$arResult['PROPERTIES']['IS_LOGIN']['VALUE'])
    <section class="{{ $block }}">
        <div class="{{ $block->elem('container') }}">
                {!! $renderer->renderBlock(
                    'main/main-title',
                    ['titleText' => $arResult['NAME'],]
                    ) !!}

                
                <div class="{{ $block->elem('content-wrapper') }}">
                    <div class="{{ $block->elem('text') }}">
                        <div class="{{ $block->elem('date') }}">{{ $arResult['PROPERTIES']["CREATION_DATE"]["VALUE"] }}</div>
                        <h2 class="{{ $block->elem('announce') }}">{!! $arResult['PREVIEW_TEXT'] !!}</h2> 
                        <div class="{{ $block->elem('detail-text') }}">
                            {!! $arResult['DETAIL_TEXT'] !!}
                        </div>
                            {!! $renderer->renderBlock(
                                'main/main-categories',
                                ['arResult' => $arResult]
                                ) !!}
                            {!! $renderer->renderBlock(
                                'main/main-news-button',
                                ['text' => 'назад к новостям',
                                'link' => '/news/']
                                ) !!}
                    </div>
                    <img class="{{ $block->elem('img') }}" src="{{$arResult['DETAIL_PICTURE']['SRC']}}"
                        alt="{{$arResult['DETAIL_PICTURE']['ALT']}}">


                </div>

        </div>
    </section>
@else
    <section class="{{ $block }}">
        <div class="{{ $block->elem('registration') }}">
            <h2 class="{{ $block->elem('reg-title') }}">Пожалуйста авторизируйтесь, или зарегистрируйтесь!</h2>
            <p class="{{ $block->elem('reg-paragraph') }}">Даная новость доступна только авторизованным пользователям</p>
            <div class="{{ $block->elem('link-wrapper') }}">
                <a class="{{ $block->elem('link') }}" href="/profile/login.php">Логин</a>
                <a class="{{ $block->elem('link') }}" href="/profile/reg.php">Регистрация</a>
            </div>


        </div>
    </section>
@endif