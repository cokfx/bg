<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
global $APPLICATION;
$APPLICATION->SetTitle("Новый раздел");
?>
<?$APPLICATION->IncludeComponent("cab:address.hint", ".default", array(
),
    false
);?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
