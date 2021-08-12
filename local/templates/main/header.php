<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

IncludeTemplateLangFile(__FILE__);
?>
<html>

<head>
    <?
    $APPLICATION->ShowHead();

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.css");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/script.js");
    ?>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.7.2/css/uikit.min.css"/>

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.7.2/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.7.2/js/uikit-icons.min.js"></script>

    <title><? $APPLICATION->ShowTitle() ?></title>
</head>

<body>
<? $APPLICATION->ShowPanel() ?>
<header class="uk-flex">
    <section class="uk-card uk-card-default uk-card-body"></section>
    <section class="uk-card uk-card-default uk-card-body"></section>
    <section class="uk-card uk-card-default uk-card-body"></section>
</header>
<main>





