@extends('frontend.layouts.master')

@section('body-class')home-page hide-btns
@endsection
@section('content')

    <div class="main-content" id="main">
        <div>
            <div class="search-form">
                <div class="wrapper">
                    <div class="fields-holder">
                        <div class="dropdown-holder area has-icon" id="area-holder"><i class="fo fo-pin"></i>

                            <select id="zone-select">
                                <option value="-1">همه محله های تهران</option>
                                <option value="52">آجودانیه</option>
                                <option value="58">آصف</option>
                                <option value="59">آقا بزرگی</option>
                                <option value="60">اتوبان ارتش</option>
                                <option value="61">اراج</option>
                                <option value="1">ازگل</option>
                                <option value="2">اقدسیه</option>
                                <option value="3">الهیه</option>
                                <option value="693">امامزاده قاسم</option>
                                <option value="62">اندرزگو</option>
                                <option value="53">انستیتو پاستور</option>
                                <option value="63">اوشانی</option>
                                <option value="4">اوین</option>
                                <option value="5">باغ فردوس</option>
                                <option value="6">بام تهران</option>
                                <option value="64">باهنر (نیاوران)</option>
                                <option value="65">بلوار بسیج</option>
                                <option value="66">بلوار دانشجو</option>
                                <option value="67">بلوار شهرزاد</option>
                                <option value="68">بلوار کاوه</option>
                                <option value="7">بوکان</option>
                                <option value="8">پارک قیطریه</option>
                                <option value="9">پارک نیاوران</option>
                                <option value="69">پاسداران چهارراه تا نوبنیاد</option>
                                <option value="10">پاسداران نوبنیاد</option>
                                <option value="70">پسیان</option>
                                <option value="71">پور ابتهاج</option>
                                <option value="11">جماران</option>
                                <option value="72">جمال آباد</option>
                                <option value="12">جمشیدیه</option>
                                <option value="73">چناران</option>
                                <option value="13">چهارراه فرمانیه</option>
                                <option value="14">چیذر</option>
                                <option value="74">حکمت</option>
                                <option value="75">خزر</option>
                                <option value="15">خیابان شهرداری تجریش</option>
                                <option value="16">دارآباد</option>
                                <option value="17">دربند</option>
                                <option value="18">درکه</option>
                                <option value="19">دزاشیب</option>
                                <option value="20">دکتر حسابی</option>
                                <option value="21">روشنایی</option>
                                <option value="22">زعفرانیه</option>
                                <option value="23">سعدآباد</option>
                                <option value="76">سه راه اقدسیه</option>
                                <option value="24">سه راه یاسر</option>
                                <option value="25">سهیل</option>
                                <option value="26">سوهانک</option>
                                <option value="27">شریعتی الهیه</option>
                                <option value="28">شریعتی قیطریه</option>
                                <option value="77">شهرک البرز</option>
                                <option value="78">شهرک چمران</option>
                                <option value="79">شهرک صدف</option>
                                <option value="80">شهرک قائم</option>
                                <option value="81">شهرک گلها</option>
                                <option value="29">شهرک محلاتی</option>
                                <option value="30">شهرک نفت</option>
                                <option value="82">صاحبقرانیه</option>
                                <option value="31">فرشته</option>
                                <option value="32">فرمانیه شرقی</option>
                                <option value="33">فرمانیه غربی</option>
                                <option value="83">قلندری شمالی</option>
                                <option value="34">قیطریه</option>
                                <option value="87">گلابدره</option>
                                <option value="88">مجتمع مسکونی سبحان</option>
                                <option value="40">محمودیه</option>
                                <option value="41">مقدس اردبیلی</option>
                                <option value="89">مقصود بیک</option>
                                <option value="90">منظریه</option>
                                <option value="91">میدان اراج</option>
                                <option value="54">میدان الف</option>
                                <option value="42">میدان تجریش</option>
                                <option value="55">میدان دارآباد</option>
                                <option value="43">میدان قدس</option>
                                <option value="57">میدان گلها فاطمی</option>
                                <option value="56">میدان ندا</option>
                                <option value="44">میدان نوبنیاد</option>
                                <option value="45">میدان نیاوران</option>
                                <option value="46">مینی سیتی</option>
                                <option value="47">نیاوران</option>
                                <option value="48">نیاوران قدس</option>
                                <option value="49">ولنجک</option>
                                <option value="50">ولیعصر فرشته</option>
                                <option value="51">ولیعصر محمودیه</option>
                                <option value="35">کاخ سعدآباد</option>
                                <option value="36">کاخ نیاوران</option>
                                <option value="37">کاشانک</option>
                                <option value="38">کامرانیه جنوبی</option>
                                <option value="39">کامرانیه شمالی</option>
                                <option value="84">کوهسار ولنجک</option>
                                <option value="85">کوی دانشگاه</option>
                                <option value="86">کوی لاله</option>
                                <option value="145">آتی ساز</option>
                                <option value="146">آزادی - توحید</option>
                                <option value="150">اکبری (مستوفی)</option>
                                <option value="151">ایثار</option>
                                <option value="92">ایران زمین</option>
                                <option value="93">ایوانک</option>
                                <option value="94">باقرخان</option>
                                <option value="95">برج میلاد</option>
                                <option value="96">برق آلستوم</option>
                                <option value="152">بلوار آریافر</option>
                                <option value="153">بلوار درختی</option>
                                <option value="97">بلوار دریا</option>
                                <option value="154">بلوار دلاوران</option>
                                <option value="155">بلوار شهرداری جنوبی</option>
                                <option value="156">بلوار شهرداری شمالی</option>
                                <option value="157">بلوار صالحی</option>
                                <option value="98">بلوار فرهنگ سعادت آباد</option>
                                <option value="100">بلوار مدیریت</option>
                                <option value="158">بلوار کوهسار</option>
                                <option value="99">بلوار کوهستان</option>
                                <option value="159">بهبودی</option>
                                <option value="160">بیست و چهار متری (سعادت آباد)</option>
                                <option value="101">پاتریس لومومبا</option>
                                <option value="102">پارک گفتگو</option>
                                <option value="103">پاکنژاد بالاتر از دریا</option>
                                <option value="104">پاکنژاد پایین تر از دریا</option>
                                <option value="105">پل مدیریت</option>
                                <option value="106">پل نصر (گیشا)</option>
                                <option value="107">تهران نو</option>
                                <option value="108">تهران ویلا</option>
                                <option value="161">تیموری</option>
                                <option value="109">جلال آل احمد</option>
                                <option value="110">چهارراه سرو</option>
                                <option value="162">چهارراه مسجد</option>
                                <option value="163">چوب تراش</option>
                                <option value="111">حبیب الله</option>
                                <option value="112">خوردین</option>
                                <option value="113">خیابان خسرو</option>
                                <option value="114">دادمان</option>
                                <option value="115">دانشگاه شریف</option>
                                <option value="164">زرافشان</option>
                                <option value="116">ستارخان از اشرفی تا شیخ فضل الله</option>
                                <option value="117">ستارخان از شیخ فضل الله تا پاتریس</option>
                                <option value="118">ستارخان توحید</option>
                                <option value="143">ستارخان نیایش</option>
                                <option value="119">سرو شرقی</option>
                                <option value="120">سرو غربی</option>
                                <option value="685">سعادت آباد</option>
                                <option value="121">سعادت آباد بالاتر از میدان کاج</option>
                                <option value="122">سعادت آباد پایین تر از میدان کاج</option>
                                <option value="123">شادمهر</option>
                                <option value="124">شهرآرا</option>
                                <option value="687">شهرک آزمایش</option>
                                <option value="165">شهرک بوعلی</option>
                                <option value="125">شهرک ژاندارمری</option>
                                <option value="126">شهرک غرب</option>
                                <option value="127">شهرک مخابرات</option>
                                <option value="166">شهرک هما</option>
                                <option value="128">طرشت</option>
                                <option value="167">علامه طباطبایی جنوبی</option>
                                <option value="168">علامه طباطبایی شمالی</option>
                                <option value="129">فرحزادی بالاتر از دادمان</option>
                                <option value="130">فرحزادی پایین تر دادمان</option>
                                <option value="131">فلامک جنوبی</option>
                                <option value="132">فلامک شمالی</option>
                                <option value="133">فلکه اول صادقیه</option>
                                <option value="134">فلکه دوم صادقیه</option>
                                <option value="170">گل افشان (شهرک غرب)</option>
                                <option value="135">گیشا (نصر)</option>
                                <option value="171">مجتمع مسکونی سروستان</option>
                                <option value="136">مرزداران</option>
                                <option value="172">میدان بهرود</option>
                                <option value="137">میدان توحید</option>
                                <option value="147">میدان تیموری</option>
                                <option value="138">میدان صنعت (شهرک غرب)</option>
                                <option value="139">میدان فرهنگ (سعادت آباد)</option>
                                <option value="140">میدان کاج</option>
                                <option value="141">میدان کتاب</option>
                                <option value="142">نصرت غربی</option>
                                <option value="149">هتل اوین</option>
                                <option value="173">هرمزان</option>
                                <option value="144">ویلا (نجات الهی)</option>
                                <option value="169">کوی فراز</option>
                                <option value="239">آرارات</option>
                                <option value="240">آرش شرقی</option>
                                <option value="241">آرش غربی</option>
                                <option value="174">آفریقا از ظفر تا میرداماد (جردن)</option>
                                <option value="175">آفریقا بالاتر از ظفر (جردن)</option>
                                <option value="176">آفریقا پایین تر از میرداماد (جردن)</option>
                                <option value="243">احتشامیه</option>
                                <option value="177">اختیاریه جنوبی</option>
                                <option value="178">اختیاریه شمالی</option>
                                <option value="235">ارسباران</option>
                                <option value="244">اسفندیار</option>
                                <option value="245">اسکان</option>
                                <option value="179">برزیل</option>
                                <option value="247">بهروز</option>
                                <option value="180">پارک آب و آتش</option>
                                <option value="181">پارک طالقانی</option>
                                <option value="182">پارک ملت</option>
                                <option value="183">پارک وی</option>
                                <option value="184">پاسداران بوستان</option>
                                <option value="185">پاسداران ضرابخانه</option>
                                <option value="186">پاسداران گلستان</option>
                                <option value="187">پاسداران نگارستان</option>
                                <option value="188">پل رومی</option>
                                <option value="248">جلفا</option>
                                <option value="189">چهارراه پاسداران</option>
                                <option value="249">چهارراه جهان کودک</option>
                                <option value="250">چهارراه قنات</option>
                                <option value="251">چهارراه کاوه</option>
                                <option value="190">حسینیه ارشاد</option>
                                <option value="252">خدامی</option>
                                <option value="242">خیابان آفتاب</option>
                                <option value="246">خیابان امیرنیا</option>
                                <option value="715">خیابان عطار</option>
                                <option value="191">خیابان ونک</option>
                                <option value="253">درب دوم</option>
                                <option value="192">دروس</option>
                                <option value="193">ده ونک</option>
                                <option value="194">دو راهی قلهک</option>
                                <option value="195">دولت(کلاهدوز)</option>
                                <option value="196">دیباجی جنوبی</option>
                                <option value="197">دیباجی شمالی</option>
                                <option value="198">زرگنده (خاقانی)</option>
                                <option value="199">سئول</option>
                                <option value="200">سئول چمران</option>
                                <option value="201">سئول نیایش</option>
                                <option value="202">سه راه ضرابخانه</option>
                                <option value="421">سه راه نشاط</option>
                                <option value="203">سیدخندان</option>
                                <option value="204">شریعتی دولت</option>
                                <option value="205">شریعتی سهیل</option>
                                <option value="206">شریعتی صدر</option>
                                <option value="207">شریعتی ظفر</option>
                                <option value="208">شریعتی میرداماد</option>
                                <option value="209">شریعتی همت</option>
                                <option value="422">شمس تبریزی</option>
                                <option value="423">شهرک سئول</option>
                                <option value="424">شهرک فجر</option>
                                <option value="425">شهرک نور</option>
                                <option value="210">شیخ بهایی جنوبی</option>
                                <option value="211">شیخ بهایی شمالی</option>
                                <option value="212">شیراز جنوبی</option>
                                <option value="213">شیراز شمالی</option>
                                <option value="214">ظفر(دستگردی)</option>
                                <option value="215">فرید افشار</option>
                                <option value="426">قبا</option>
                                <option value="427">قلندری جنوبی</option>
                                <option value="216">قلهک</option>
                                <option value="217">گاندی شمالی</option>
                                <option value="428">گل نبی</option>
                                <option value="429">مجموعه ورزشی انقلاب</option>
                                <option value="218">ملاصدرا</option>
                                <option value="430">میدان احتشامیه</option>
                                <option value="219">میدان اختیاریه</option>
                                <option value="236">میدان جوانان</option>
                                <option value="220">میدان شیخ بهایی</option>
                                <option value="222">میدان مادر (محسنی)</option>
                                <option value="237">میدان مینا</option>
                                <option value="238">میدان هدایت</option>
                                <option value="223">میدان ونک</option>
                                <option value="221">میدان کتابی(احمد روشن)</option>
                                <option value="224">میرداماد</option>
                                <option value="225">میرداماد از شریعتی تا مدرس</option>
                                <option value="226">میرداماد از مدرس تا ولیعصر</option>
                                <option value="227">نفت شمالی</option>
                                <option value="228">نمایشگاه تهران</option>
                                <option value="431">هدایت</option>
                                <option value="714">والی نژاد</option>
                                <option value="229">ولیعصر جام جم</option>
                                <option value="230">ولیعصر ظفر</option>
                                <option value="231">ولیعصر میرداماد</option>
                                <option value="232">ولیعصر نیایش</option>
                                <option value="233">ونک سئول</option>
                                <option value="234">یخچال</option>
                                <option value="454">آیت بالاتر از رسالت</option>
                                <option value="455">اردیبهشت جنوبی</option>
                                <option value="456">اردیبهشت شمالی</option>
                                <option value="457">استخر</option>
                                <option value="432">باغ لویزان</option>
                                <option value="463">برادران پناهی نیا</option>
                                <option value="458">بلوار استقلال</option>
                                <option value="433">بلوار پروین</option>
                                <option value="459">بلوار جشنواره</option>
                                <option value="460">بلوار شاهد</option>
                                <option value="700">بنی هاشم</option>
                                <option value="461">پارک جنگلی شهید فلاحی</option>
                                <option value="434">پارک جنگلی لویزان</option>
                                <option value="462">پایدارفرد</option>
                                <option value="435">تهران پارس</option>
                                <option value="436">چهارراه سراج</option>
                                <option value="437">حکیمیه</option>
                                <option value="438">خواجه عبدالله انصاری</option>
                                <option value="464">خیابان الغدیر</option>
                                <option value="439">ساقدوش (افشاری)</option>
                                <option value="440">سراج</option>
                                <option value="465">شعبانلو</option>
                                <option value="466">شهرک امید</option>
                                <option value="467">شهید عراقی</option>
                                <option value="441">شیان</option>
                                <option value="442">فرجام</option>
                                <option value="468">فرخی یزدی</option>
                                <option value="443">لویزان</option>
                                <option value="469">مجدیه شمالی</option>
                                <option value="444">مجیدیه شمالی</option>
                                <option value="470">مریم</option>
                                <option value="471">مژده</option>
                                <option value="473">ملت</option>
                                <option value="445">مهران</option>
                                <option value="472">مکران</option>
                                <option value="474">میدان اشراق</option>
                                <option value="449">میدان پروین</option>
                                <option value="450">میدان تختی</option>
                                <option value="451">میدان رسالت</option>
                                <option value="446">میدان قنات کوثر</option>
                                <option value="452">میدان ملت</option>
                                <option value="447">میدان هروی</option>
                                <option value="453">هتل شیان</option>
                                <option value="448">هنگام</option>
                                <option value="475">وفامنش</option>
                                <option value="507">آبشناسان</option>
                                <option value="476">آیت الله کاشانی</option>
                                <option value="510">ابوذر - اشرفی اصفهانی</option>
                                <option value="708">اشرفی اصفهانی بالاتر از نیایش</option>
                                <option value="477">اشرفی اصفهانی تیراژه</option>
                                <option value="479">باغ فیض</option>
                                <option value="511">بزرگراه جناح</option>
                                <option value="512">بلوار باهنر ستاری</option>
                                <option value="513">بلوار عدل</option>
                                <option value="480">بلوار فردوس شرقی</option>
                                <option value="481">بلوار فردوس غربی</option>
                                <option value="689">پونک شمالی</option>
                                <option value="482">پیامبر شرقی</option>
                                <option value="483">پیامبر غربی</option>
                                <option value="484">پیامبر مرکزی</option>
                                <option value="485">جنت آباد جنوبی</option>
                                <option value="486">جنت آباد شمالی</option>
                                <option value="487">جنت آباد مرکزی</option>
                                <option value="514">چهار دیواری</option>
                                <option value="515">حصارک</option>
                                <option value="709">زیتون</option>
                                <option value="707">زیتون</option>
                                <option value="508">سازمان آب</option>
                                <option value="488">سازمان آب آیت الله کاشانی</option>
                                <option value="489">سازمان برنامه</option>
                                <option value="490">ستاری حکیم</option>
                                <option value="491">سردار جنگل</option>
                                <option value="492">سیمون بلیوار</option>
                                <option value="493">شاهین جنوبی</option>
                                <option value="494">شاهین شمالی</option>
                                <option value="495">شهر زیبا</option>
                                <option value="496">شهران</option>
                                <option value="497">شهرک آپادانا</option>
                                <option value="706">شهرک شرکت نفت (OPG)</option>
                                <option value="498">شهرک نفت سیمون بلیوار</option>
                                <option value="499">شهرک والفجر</option>
                                <option value="694">فاز دو اکباتان</option>
                                <option value="500">فاز یک اکباتان</option>
                                <option value="501">فلکه اول شهران</option>
                                <option value="502">فلکه دوم شهران</option>
                                <option value="516">گلفام</option>
                                <option value="517">مجتمع تجاری کورش</option>
                                <option value="518">مراد آباد</option>
                                <option value="506">میدان پونک</option>
                                <option value="509">میدان دانشگاه علوم تحقیقات</option>
                                <option value="503">کن</option>
                                <option value="504">کوی ارم</option>
                                <option value="505">کوی بیمه</option>
                                <option value="565">آ اس پ</option>
                                <option value="566">آبان جنوبی (شهید عضدی)</option>
                                <option value="567">آبان شمالی (شهید عضدی)</option>
                                <option value="519">آفریقا همت تا آرژانتین (جردن)</option>
                                <option value="568">الوند</option>
                                <option value="705">امیرآباد جنوبی</option>
                                <option value="520">امیرآباد شمالی</option>
                                <option value="521">ایرانشهر</option>
                                <option value="569">بخارست (احمد قصیر)</option>
                                <option value="570">برادران مظفر</option>
                                <option value="571">برج تهران</option>
                                <option value="572">بزرگراه مدرس</option>
                                <option value="573">بزرگمهر</option>
                                <option value="522">بلوار کشاورز</option>
                                <option value="524">بلوار کشاورز فلسطین</option>
                                <option value="525">بلوار کشاورز کارگر</option>
                                <option value="574">بیستون</option>
                                <option value="527">بیمارستان امام خمینی</option>
                                <option value="528">بیهقی</option>
                                <option value="529">پارک ساعی</option>
                                <option value="530">پارک شفق</option>
                                <option value="531">پارک لاله</option>
                                <option value="532">پارک هنرمندان</option>
                                <option value="575">پروین اعتصامی فاطمی</option>
                                <option value="576">توانیر</option>
                                <option value="533">جمال زاده</option>
                                <option value="577">جهان آرا</option>
                                <option value="578">چهارراه کالج</option>
                                <option value="579">حجاب</option>
                                <option value="523">حجاب - بلوار کشاورز</option>
                                <option value="667">خالد اسلامبولی</option>
                                <option value="580">خردمند جنوبی</option>
                                <option value="581">خردمند شمالی</option>
                                <option value="534">دکتر قریب</option>
                                <option value="582">زرتشت</option>
                                <option value="535">سپهبد قرنی</option>
                                <option value="583">سمیه</option>
                                <option value="584">سنایی</option>
                                <option value="536">شانزده آذر</option>
                                <option value="585">طالقانی</option>
                                <option value="586">طالقانی قرنی</option>
                                <option value="540">فاطمی (جهاد)</option>
                                <option value="537">فاطمی حجاب</option>
                                <option value="538">فاطمی کاج</option>
                                <option value="539">فاطمی کارگر</option>
                                <option value="541">فتحی شقاقی</option>
                                <option value="587">فجر(جم)</option>
                                <option value="588">فرصت شیرازی</option>
                                <option value="542">فلسطین شمالی</option>
                                <option value="543">قائم مقام فراهانی</option>
                                <option value="589">قدس</option>
                                <option value="544">قزل قلعه</option>
                                <option value="547">گاندی جنوبی</option>
                                <option value="594">گمنام</option>
                                <option value="590">لارستان</option>
                                <option value="591">مدبر (مهرام)</option>
                                <option value="548">میدان آرژانتین</option>
                                <option value="562">میدان انقلاب</option>
                                <option value="563">میدان سلماس</option>
                                <option value="549">میدان فاطمی</option>
                                <option value="564">میدان فرهنگ (میدان اسد آبادی)</option>
                                <option value="550">میدان فلسطین</option>
                                <option value="551">میدان ولیعصر</option>
                                <option value="552">نصرت</option>
                                <option value="592">وصال شیرازی</option>
                                <option value="553">ولیعصر آبشار</option>
                                <option value="554">ولیعصر بهشتی</option>
                                <option value="555">ولیعصر پل همت</option>
                                <option value="556">ولیعصر توانیر</option>
                                <option value="557">ولیعصر زرتشت</option>
                                <option value="558">ولیعصر طالقانی</option>
                                <option value="559">ولیعصر فاطمی</option>
                                <option value="593">ونک پارک</option>
                                <option value="545">کارگر شمالی تا گمنام</option>
                                <option value="526">کبیر زاده (بلوار لاله)</option>
                                <option value="546">کریمخان</option>
                                <option value="560">یوسف آباد بالاتر از میدان اسدآبادی</option>
                                <option value="561">یوسف آباد پایین تراز میدان اسدآبادی</option>
                                <option value="653">ابن یمین</option>
                                <option value="595">اجاره دار (خواجه نطام)</option>
                                <option value="654">ادیبی</option>
                                <option value="596">امجدیه (خاقانی)</option>
                                <option value="478">اندیشه</option>
                                <option value="597">باغ موزه قصر</option>
                                <option value="669">بسطامی</option>
                                <option value="598">بهار جنوبی</option>
                                <option value="599">بهار شمالی</option>
                                <option value="600">بهارشیراز</option>
                                <option value="601">بهشتی مدرس (عباس آباد)</option>
                                <option value="704">پروشات</option>
                                <option value="602">پل چوبی</option>
                                <option value="603">پلیس</option>
                                <option value="604">پیچ شمیران</option>
                                <option value="605">ترکمنستان</option>
                                <option value="606">چهارراه سهروردی</option>
                                <option value="607">چهارراه عباس آباد</option>
                                <option value="608">چهارراه قصر</option>
                                <option value="609">چهارراه نظام آباد</option>
                                <option value="656">حشمتیه</option>
                                <option value="645">خرمشهر</option>
                                <option value="610">خواجه نصیر طوسی</option>
                                <option value="657">خواجه نظام</option>
                                <option value="655">خیابان پاکستان</option>
                                <option value="611">دبستان (کابلی)</option>
                                <option value="612">دماوند از سبلان تا امام حسین</option>
                                <option value="613">سبلان جنوبی</option>
                                <option value="614">سبلان شمالی</option>
                                <option value="615">سپاه</option>
                                <option value="616">سرباز</option>
                                <option value="617">سلیمان خاطر</option>
                                <option value="658">سه راه زندان</option>
                                <option value="659">سه راه طالقانی</option>
                                <option value="618">سهروردی جنوبی</option>
                                <option value="619">سهروردی شمالی</option>
                                <option value="620">سورنا (حسینی)</option>
                                <option value="621">شریعتی بهارشیراز</option>
                                <option value="622">شریعتی پلیس</option>
                                <option value="623">شریعتی سمیه</option>
                                <option value="624">شریعتی مطهری</option>
                                <option value="625">شریعتی معلم</option>
                                <option value="626">شریعتی ملک</option>
                                <option value="627">شهید قدوسی</option>
                                <option value="646">شهید قندی</option>
                                <option value="628">صابونچی (مهناز)</option>
                                <option value="660">طالقانی بهار</option>
                                <option value="661">عشقیار (نیلوفر)</option>
                                <option value="629">قنبرزاده</option>
                                <option value="664">گرگان</option>
                                <option value="665">مدنی از امام علی تا امام حسین</option>
                                <option value="666">مرودشت</option>
                                <option value="631">مطهری (تخت طاووس)</option>
                                <option value="630">مطهری مفتح</option>
                                <option value="632">معلم</option>
                                <option value="633">مفتح جنوبی</option>
                                <option value="634">مفتح شمالی</option>
                                <option value="635">ملک</option>
                                <option value="647">میدان امام حسین</option>
                                <option value="648">میدان بهار شیراز</option>
                                <option value="649">میدان پالیزی</option>
                                <option value="650">میدان سبلان</option>
                                <option value="651">میدان سپاه</option>
                                <option value="636">میدان نامجو (گرگان)</option>
                                <option value="652">میدان نیلوفر</option>
                                <option value="637">میدان هفت تیر</option>
                                <option value="638">میرزای شیرازی</option>
                                <option value="639">میرعماد</option>
                                <option value="640">نامجو (گرگان)</option>
                                <option value="641">نظام آباد</option>
                                <option value="642">هویزه شرقی</option>
                                <option value="643">هویزه غربی</option>
                                <option value="644">ولیعصر مطهری</option>
                                <option value="662">کشواد</option>
                                <option value="663">کلیم کاشانی</option>
                                <option value="668">یوسفیان</option>
                                <option value="266">آیت پایین تر از رسالت</option>
                                <option value="267">اثنی عشری (شانزده متری دوم)</option>
                                <option value="268">امیری طائمه</option>
                                <option value="269">چهارراه تلفنخانه</option>
                                <option value="270">چهارراه تیرانداز</option>
                                <option value="271">چهارراه سیدالشهدا</option>
                                <option value="272">چهارراه کرمان</option>
                                <option value="273">خیابان ثانی</option>
                                <option value="255">دردشت</option>
                                <option value="672">دماوند باقری تا رسالت</option>
                                <option value="673">دماوند باقری تا سبلان</option>
                                <option value="274">سمنگان</option>
                                <option value="256">فدک</option>
                                <option value="257">فلکه اول تهرانپارس</option>
                                <option value="258">فلکه چهارم تهرانپارس</option>
                                <option value="259">فلکه دوم تهرانپارس</option>
                                <option value="260">فلکه سوم تهرانپارس</option>
                                <option value="275">گلبرگ شرقی (جانبازان)</option>
                                <option value="276">گلبرگ غربی (جانبازان)</option>
                                <option value="277">گلشن دوست</option>
                                <option value="670">مجیدیه جنوبی</option>
                                <option value="262">مدائن</option>
                                <option value="278">مدنی از امام علی تا سبلان</option>
                                <option value="279">مدنی فدک</option>
                                <option value="280">مدنی گلبرگ</option>
                                <option value="281">مسیل باختر</option>
                                <option value="263">میدان شقایق</option>
                                <option value="254">میدان نبوت (هفت حوض)</option>
                                <option value="264">میدان هلال احمر</option>
                                <option value="671">نارمک</option>
                                <option value="265">هفت حوض</option>
                                <option value="282">همایی(شانزده متری اول)</option>
                                <option value="261">کرمان</option>
                                <option value="285">آزادی</option>
                                <option value="286">استاد معین</option>
                                <option value="283">امام خمینی از یادگار تا جیهون</option>
                                <option value="291">بیست و یک متری جی</option>
                                <option value="284">دامپزشکی از سعیدی تا یادگار</option>
                                <option value="287">فرودگاه</option>
                                <option value="288">مهرآباد جنوبی</option>
                                <option value="289">میدان آزادی</option>
                                <option value="290">هاشمی از سعیدی تا یادگار</option>
                                <option value="299">آذربایجان از آزادی تا توحید</option>
                                <option value="292">امام خمینی از جیهون تا قصرالدشت</option>
                                <option value="697">بریانک</option>
                                <option value="300">جی</option>
                                <option value="301">جیحون</option>
                                <option value="293">خوش جنوبی</option>
                                <option value="294">خوش شمالی</option>
                                <option value="295">رودکی جنوبی بالاتر از آذربایجان</option>
                                <option value="302">زنجان جنوبی</option>
                                <option value="305">شهیدان</option>
                                <option value="306">طوس</option>
                                <option value="296">قصرالدشت</option>
                                <option value="303">میدان جمهوری</option>
                                <option value="298">نواب صفوی</option>
                                <option value="304">هاشمی از یادگار تا نواب</option>
                                <option value="297">کارون</option>
                                <option value="330">آذربایجان از کارگر تا ولیعصر</option>
                                <option value="331">اسکندری</option>
                                <option value="308">امام خمینی از حر تا ولیعصر</option>
                                <option value="309">امام خمینی از ولیعصر تا حسن آباد</option>
                                <option value="675">امیر بهادر</option>
                                <option value="332">انقلاب</option>
                                <option value="310">پارک دانشجو</option>
                                <option value="307">جمال زاده (حشمت الدوله)</option>
                                <option value="312">جمهوری از میدان تا کارگر</option>
                                <option value="313">جمهوری از ولیعصر تا حافظ</option>
                                <option value="311">جمهوری از کارگر تا ولیعصر</option>
                                <option value="686">جمهوری-کارگر تا اسکندری</option>
                                <option value="333">چهارراه لشگر</option>
                                <option value="314">چهارراه ولیعصر</option>
                                <option value="315">حافظ شمالی</option>
                                <option value="316">حافظ طالقانی</option>
                                <option value="317">حافظ نوفل لوشاتو</option>
                                <option value="338">خابان وحدت اسلامی (حسن آباد)</option>
                                <option value="688">خیابان آذربایجان-کارگر تا اسکندری</option>
                                <option value="318">دوازده فروردین</option>
                                <option value="319">رازی</option>
                                <option value="339">شهدای ژاندارمری</option>
                                <option value="334">شیخ هادی</option>
                                <option value="320">قزوین ولیعصر</option>
                                <option value="340">مصطفی خمینی</option>
                                <option value="341">مولوی از محمدیه تا چهارراه مولوی</option>
                                <option value="335">میدان پاستور</option>
                                <option value="336">میدان حر</option>
                                <option value="337">میدان حسن آباد</option>
                                <option value="323">میدان قزوین</option>
                                <option value="324">میدان منیریه</option>
                                <option value="325">نوفل لوشاتو حافظ تا ولیعصر</option>
                                <option value="342">هلال احمر</option>
                                <option value="326">ولیعصر آذربایجان</option>
                                <option value="327">ولیعصر امام خمینی</option>
                                <option value="328">ولیعصر جمهوری</option>
                                <option value="329">ولیعصر منیریه</option>
                                <option value="321">کارگر جنوبی از انقلاب تا میدان پاستور</option>
                                <option value="322">کارگر جنوبی از حر تا قزوین</option>
                                <option value="365">ابن سینا</option>
                                <option value="366">ابن سینا بهارستان</option>
                                <option value="367">امام زاده یحیی</option>
                                <option value="368">امیرکبیر</option>
                                <option value="369">ایران</option>
                                <option value="701">بازار بزرگ تهران</option>
                                <option value="370">بلوار قیام</option>
                                <option value="371">پامنار</option>
                                <option value="372">پانزده خرداد</option>
                                <option value="343">جمهوری از فردوسی تا حافظ</option>
                                <option value="344">جمهوری بهارستان</option>
                                <option value="345">جمهوری فردوسی</option>
                                <option value="346">چهارراه اسلامبول</option>
                                <option value="347">حافظ بعد از پل کالج</option>
                                <option value="373">خراسان</option>
                                <option value="374">خیابان ری</option>
                                <option value="348">دروازه دولت</option>
                                <option value="349">دروازه شمیران</option>
                                <option value="375">زرین نعل</option>
                                <option value="350">سعدی</option>
                                <option value="351">سی تیر</option>
                                <option value="376">شوش از میدان شوش تا هفده شهریور</option>
                                <option value="377">شیخ صفی</option>
                                <option value="378">صفی علیشاه</option>
                                <option value="352">فردوسی</option>
                                <option value="353">فلسطین جنوبی از انقلاب تا جمهوری</option>
                                <option value="354">فلسطین جنوبی پایین تر از جمهوری</option>
                                <option value="380">گوته</option>
                                <option value="381">مازندران</option>
                                <option value="382">مردم</option>
                                <option value="383">منوچهری</option>
                                <option value="703">مولوی</option>
                                <option value="702">مولوی (میدان مولوی تا خیابان مصطفی خمینی)</option>
                                <option value="358">میدان امام خمینی (توپ خانه)</option>
                                <option value="359">میدان بهارستان</option>
                                <option value="360">میدان خراسان</option>
                                <option value="361">میدان شهداء (هفده شهریور)</option>
                                <option value="362">میدان شوش</option>
                                <option value="355">میدان فردوسی</option>
                                <option value="356">میدان قیام</option>
                                <option value="357">نوفل لوشاتو فردوسی تا حافظ</option>
                                <option value="363">هفده شهریور جنوب میدان شهداء</option>
                                <option value="364">هفده شهریور شمال میدان شهداء</option>
                                <option value="384">وحدت اسلامی</option>
                                <option value="379">کوچه مروی</option>
                                <option value="388">امامت</option>
                                <option value="385">پیروزی</option>
                                <option value="389">مسیل جاجرود</option>
                                <option value="390">مسیل منوچهری</option>
                                <option value="386">میدان چایچی</option>
                                <option value="387">نیرو هوایی</option>
                                <option value="392">بلوار ابوذر</option>
                                <option value="393">چهارصد دستگاه</option>
                                <option value="391">خاوران</option>
                                <option value="695">سر آسیاب</option>
                                <option value="394">مجاهدین اسلام</option>
                                <option value="395">کیانشهر</option>
                                <option value="398">جوادیه</option>
                                <option value="399">علی آباد</option>
                                <option value="397">میدان کلانتری</option>
                                <option value="396">نازی آباد</option>
                                <option value="400">ابوذر - فلاح</option>
                                <option value="401">سه راه آذری</option>
                                <option value="403">آشتیانی (جواد الائمه)</option>
                                <option value="402">میدان الغدیر</option>
                                <option value="404">بهمنیار</option>
                                <option value="405">خانی آباد</option>
                                <option value="406">شکوفه</option>
                                <option value="414">بلوار دیلمان</option>
                                <option value="415">پروین اعتصامی دولت آباد</option>
                                <option value="409">جوانمرد قصاب</option>
                                <option value="407">دولت آباد</option>
                                <option value="408">دیلمان</option>
                                <option value="416">سه راه ورامین</option>
                                <option value="417">شهرک شهید مفتح</option>
                                <option value="418">شهید غیوری</option>
                                <option value="410">میدان شهرداری (قیصر امین پور)</option>
                                <option value="411">میدان شهرری</option>
                                <option value="412">میدان نماز</option>
                                <option value="413">میدان هادی ساعی</option>
                                <option value="419">بلوار گلها</option>
                                <option value="674">تهرانسر</option>
                                <option value="420">شهرک دانشگاه</option>
                                <option value="717">شهرک شهید غزالی</option>
                                <option value="718">بلوار کوهک</option>
                                <option value="710">دریاچه چیتگر</option>
                                <option value="712">شهرک چیتگر</option>
                                <option value="716">شهرک شهید باقری</option>
                                <option value="711">شهرک شهید صیاد شیرازی</option>
                                <option value="713">میدان دریاچه</option>
                            </select>

                        </div>
                        <div class="keyword-search-holder">
                            <i class="fo fo-search"></i>
                            <form method="get" action="https://www.delino.com/search/" id="frm-srch" class="show-tag">

                                <select style="width: 100%;" id="category-select" type="select" name="q"
                                        value="{{isset($activeCategory['id']) ? $activeCategory['id'] : -1}}">
                                    <option value=-1>همه دسته بندی ها</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category['id']}}">{{$category['title']}}</option>
                                    @endforeach
                                </select>
                            </form>
                            <div class="tag-list">
                                <ul>
                                    <li>
                                        <a href="https://www.delino.com/search?t=economic" class="type-economic">
                                            <span>مقرون به صرفه</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.delino.com/search?t=chili" class="type-chili">
                                            <span>تند</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.delino.com/search?t=healthy" class="type-healthy">
                                            <span>سالم</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.delino.com/search?t=diet" class="type-diet">
                                            <span>رژیمی</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.delino.com/search?t=seafood" class="type-seafood">
                                            <span>دریایی</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.delino.com/search?t=local" class="type-local">
                                            <span>محلی</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.delino.com/search?t=breakfast" class="type-breakfast">
                                            <span>صبحانه</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.delino.com/search?t=kids" class="type-kids">
                                            <span>کودک</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.delino.com/search?t=international"
                                           class="type-international">
                                            <span>بین المللی</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <button class="btn-default btn-search">جستجو</button>
                </div>
            </div>

            <div class="content-inner fix-height">


                <section class="home-section home-qu-s qu-s">
                    <div class="wrapper clearfix">
                        <header>
                            <h2>
                                جست و جوی سریع کالا
                                <small>لباس مورد نظر تو انتخاب کن</small>
                            </h2>
                        </header>
                        <div class="qu-h">
                            <div class="wp" id="qu-s">
                                <ul class="thin-scrollbar clearfix">
                                    @foreach($categories as $category)
                                        <li><a href="{{url(route('stores.index').'?category='.$category['id'])}}">
                                                <img src="{{asset('/storage/'.$category['photo'])}}" alt="{{$category['title']}}">
                                                <span>{{$category['title']}}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="home-section home-about-delino">
                    <div class="wrapper clearfix">
                        <header>
                            <h2>
                                ساده ترین راه انتخاب و خرید لباس
                            </h2>
                        </header>
                        <div class="white-box wp">
                            <p>
                                سیستم انتخاب و خرید اینترنتی لباس فلان در حال حاضر با بیش از 80% فروشگاه های سطح شهر همکاری می کنه<br>
                                تیم فنی و پشتیبانی ما به صورت شبانه روزی تلاش میکنه تا تجربه ای خوب از خرید آسان لباس برای شما ایجاد کنه.
                            </p>
                        </div>
                    </div>
                </section>


                <div class="wrapper clearfix">
                </div>


                <section class="home-section home-links clearfix">
                    <div class="wrapper clearfix">
                        <header>
                            <h2>جدیدترین فروشگاه ها</h2>
                        </header>
                        <div class="top-rest-holder clearfix" id="top-rest">
                            <ul>
                                @foreach($stores as $store)
                                <li><a href="{{route('stores.single', ['id' => $store['id']])}}">
                                        <h3>{{$store['title']}}
                                            <small>({{$zones[$store['zone_id']]}})</small>
                                        </h3>
                                    </a></li>
                               @endforeach
                            </ul>
                        </div>
                        <div class="button-holder"><a href="{{route('stores.index')}}" class=" btn-default">نمایش همه
                                فروشگاه ها</a></div>
                    </div>
                </section>

                <section class="home-section home-brands visible-md visible-lg">
                    <div class="wrapper clearfix">


                    </div>
                </section>
            </div>
        </div>
    </div>


@endsection
@section('scripts')
    <script>
        $(document).ready(function () {

            $('#zone-select').select2();
            $('#category-select').select2();
            $('#zone-select').select2();
            $('#category-select').select2();
            $('.search-form .btn-search').click(function () {
                var url = location.protocol + '//' + location.host + location.pathname;
                var category = $('#category-select').val();
                var zone = $('#zone-select').val();
                console.log(category, zone);
                if (zone == -1) {
                    zone = "";
                }
                if (category == -1) {
                    category = "";
                }
                url = '/stores' + "?category=" + category + "&zone=" + zone;
                window.location = url;

            });
        });

    </script>
@endsection
