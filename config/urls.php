<?php
return [
    [
        'pattern' => 'car-leasing/<categories:.*>',
        'route' => 'product/category',
        'encodeParams' => false,
    ],
    'car-leasing' => 'site/manulist',
    'about-us' => 'site/aboutus',
    'about-us/meet-the-team' => 'site/meettheteam',
    'personal-leasing' => 'site/personalleasing',
    'business-leasing' => 'site/businessleasing',
    'services/gap-insurance' => 'site/gapinsurance',
    'services/maintenance' => 'site/maintenance',
    'services/part-exchange' => 'site/partexchange',
    'services/smartrack' => 'site/smartrack',
    'blog' => 'site/blog',

    'terms-and-conditions' => 'site/termsandconditions',
    'complaints-procedure' => 'site/complaintsprocedure',
    'treating-customers-fairly' => 'site/treatingcustomersfairly',
    'initial-disclosure' => 'site/initialdisclosure',
    'privacy-policy' => 'site/privacypolicy',

    'van-leasing' => 'site/vanleasing',
    'services' => 'site/services',
    'advanced-search' => 'site/advancedsearch',
    'special-offers' => 'site/specialoffers',

    'contact-us' => 'site/contactus',
    'leasing' => 'site/leasing',

    'leasing-guide/what-is-car-leasing' => 'site/whatiscarleasing',
    'leasing-guide/how-it-works' => 'site/howitworks',
    'leasing-guide/finance-options' => 'site/financeoptions',
    'leasing-guide/wear-and-tear' => 'site/wearandtear',
    'leasing-guide/depreciation' => 'site/depreciation',
    'leasing-guide/faq' => 'site/faq',
    'leasing-guide/fuel-cost-calculator' => 'site/fuelcostcalculator',
    'leasing-guide/bik-tax-calculator' => 'site/biktaxcalculator',
    'leasing-guide/glossary' => 'site/glossary',
    'leasing-guide/end-of-contract' => 'site/endofcontract',

    'my-showroom' => 'site/myshowroom',
    [
    'pattern' => 'resultsapis/<categories:.*>',
    'route' => 'resultsapi/category',
    'encodeParams' => false,
],

];
