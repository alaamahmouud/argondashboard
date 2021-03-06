<?php

use Illuminate\Database\Seeder;

class City extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        DB::insert('INSERT INTO `governorates` (`id`, `name`) VALUES
(1, \'القاهرة\'),
(2, \'الجيزة\'),
(3, \'الأسكندرية\'),
(4, \'الدقهلية\'),
(5, \'البحر الأحمر\'),
(6, \'البحيرة\'),
(7, \'الفيوم\'),
(8, \'الغربية\'),
(9, \'الإسماعلية\'),
(10, \'المنوفية\'),
(11, \'المنيا\'),
(12, \'القليوبية\'),
(13, \'الوادي الجديد\'),
(14, \'السويس\'),
(15, \'اسوان\'),
(16, \'اسيوط\'),
(17, \'بني سويف\'),
(18, \'بورسعيد\'),
(19, \'دمياط\'),
(20, \'الشرقية\'),
(21, \'جنوب سيناء\'),
(22, \'كفر الشيخ\'),
(23, \'مطروح\'),
(24, \'الأقصر\'),
(25, \'قنا\'),
(26, \'شمال سيناء\'),
(27, \'سوهاج\')');

        DB::insert('
INSERT INTO `cities` (`id`, `governorate_id`, `name`) VALUES
(1, 1, \'القاهره\'),
(2, 2, \'الجيزة\'),
(3, 2, \'السادس من أكتوبر\'),
(4, 2, \'الشيخ زايد\n\'),
(5, 2, \'الحوامدية\'),
(6, 2, \'البدرشين\'),
(7, 2, \'الصف\'),
(8, 2, \'أطفيح\'),
(9, 2, \'العياط\'),
(10, 2, \'الباويطي\'),
(11, 2, \'منشأة القناطر\'),
(12, 2, \'أوسيم\'),
(13, 2, \'كرداسة\'),
(14, 2, \'أبو النمرس\'),
(15, 2, \'كفر غطاطي\'),
(16, 2, \'منشأة البكاري\'),
(17, 3, \'الأسكندرية\'),
(18, 3, \'برج العرب\'),
(19, 3, \'برج العرب الجديدة\'),
(20, 12, \'بنها\'),
(21, 12, \'قليوب\'),
(22, 12, \'شبرا الخيمة\'),
(23, 12, \'القناطر الخيرية\'),
(24, 12, \'الخانكة\'),
(25, 12, \'كفر شكر\'),
(26, 12, \'طوخ\'),
(27, 12, \'قها\'),
(28, 12, \'العبور\'),
(29, 12, \'الخصوص\'),
(30, 12, \'شبين القناطر\'),
(31, 6, \'دمنهور\'),
(32, 6, \'كفر الدوار\'),
(33, 6, \'رشيد\'),
(34, 6, \'إدكو\'),
(35, 6, \'أبو المطامير\'),
(36, 6, \'أبو حمص\'),
(37, 6, \'الدلنجات\'),
(38, 6, \'المحمودية\'),
(39, 6, \'الرحمانية\'),
(40, 6, \'إيتاي البارود\'),
(41, 6, \'حوش عيسى\'),
(42, 6, \'شبراخيت\'),
(43, 6, \'كوم حمادة\'),
(44, 6, \'بدر\'),
(45, 6, \'وادي النطرون\'),
(46, 6, \'النوبارية الجديدة\'),
(47, 23, \'مرسى مطروح\'),
(48, 23, \'الحمام\'),
(49, 23, \'العلمين\'),
(50, 23, \'الضبعة\'),
(51, 23, \'النجيلة\'),
(52, 23, \'سيدي براني\'),
(53, 23, \'السلوم\'),
(54, 23, \'سيوة\'),
(55, 19, \'دمياط\'),
(56, 19, \'دمياط الجديدة\'),
(57, 19, \'رأس البر\'),
(58, 19, \'فارسكور\'),
(59, 19, \'الزرقا\'),
(60, 19, \'السرو\'),
(61, 19, \'الروضة\'),
(62, 19, \'كفر البطيخ\'),
(63, 19, \'عزبة البرج\'),
(64, 19, \'ميت أبو غالب\'),
(65, 19, \'كفر سعد\'),
(66, 4, \'المنصورة\'),
(67, 4, \'طلخا\'),
(68, 4, \'ميت غمر\'),
(69, 4, \'دكرنس\'),
(70, 4, \'أجا\'),
(71, 4, \'منية النصر\'),
(72, 4, \'السنبلاوين\'),
(73, 4, \'الكردي\'),
(74, 4, \'بني عبيد\'),
(75, 4, \'المنزلة\'),
(215, 27, \'دار السلام\'),
(216, 27, \'جرجا\'),
(217, 27, \'جهينة الغربية\'),
(218, 27, \'ساقلته\'),
(219, 27, \'طما\'),
(220, 27, \'طهطا\'),
(221, 25, \'قنا\'),
(222, 25, \'قنا الجديدة\'),
(223, 25, \'أبو تشت\'),
(224, 25, \'نجع حمادي\'),
(225, 25, \'دشنا\'),
(226, 25, \'الوقف\'),
(227, 25, \'قفط\'),
(228, 25, \'نقادة\'),
(229, 25, \'فرشوط\'),
(230, 25, \'قوص\'),
(231, 24, \'الأقصر\'),
(232, 24, \'الأقصر الجديدة\'),
(233, 24, \'إسنا\'),
(234, 24, \'طيبة الجديدة\'),
(235, 24, \'الزينية\'),
(236, 24, \'البياضية\'),
(237, 24, \'القرنة\'),
(238, 24, \'أرمنت\'),
(239, 24, \'الطود\'),
(240, 15, \'أسوان\'),
(241, 15, \'أسوان الجديدة\'),
(242, 15, \'دراو\'),
(243, 15, \'كوم أمبو\'),
(244, 15, \'نصر النوبة\'),
(245, 15, \'كلابشة\'),
(246, 15, \'إدفو\'),
(247, 15, \'الرديسية\'),
(248, 15, \'البصيلية\'),
(249, 15, \'السباعية\'),
(250, 15, \'ابوسمبل السياحية\');');


    }

}
