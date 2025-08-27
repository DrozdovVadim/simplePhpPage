<li class="{{ $block }}">
@if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die() @endif
@php
    $compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
@endphp
@if (!$compositeStub && $arParams['SHOW_AUTHOR'] == 'Y')
    @if ($USER->IsAuthorized())
        @php $name = trim($USER->GetFullName() ? trim($USER->GetFullName()) : trim($USER->GetLogin())); @endphp
        <a class="{{ $block->elem('link') }}" href="{{$arParams['PATH_TO_PROFILE']}}">{{$name}}</a>
		<a href="?logout=yes&{{bitrix_sessid_get()}}">{{(GetMessage('TSB1_LOGOUT'))}}</a>
    @else
        <a href="{{$arParams['PATH_TO_AUTHORIZE']}}">Логин</a>
        <a href="{{$arParams['PATH_TO_REGISTER']}}">Регистрация</a>
    @endif
@endif
</li>
            