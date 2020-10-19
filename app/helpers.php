<?php

function checkActive($path, $active = 'active') {
    if (is_string($path)) {
        return request()->is($path) ? $active : '';
    }
    foreach ($path as $str) {
        if (checkActive($str) == $active)
            return $active;
    }
}

function getGender() {
    $cat = ['' => '-- Select Gender / लिंग चुने--',
        'Male' => 'Male / पुरुष',
        'Female' => 'Female / महिला',
        'Others' => 'Others / अन्य',
    ];
    return $cat;
}

function getLoc() {
    $loc = ['' => '-- Select Address Location / पता स्थान --',
        'URBAN' => 'URBAN / शहरी',
        'RURAL' => 'RURAL / ग्रामीण',
    ];
    return $loc;
}

function getStatus() {
    $st = ['' => '-- Select Present Status / वर्तमान स्थिति  --',
        'Student' => 'Student / छात्र',
        'Employed' => 'Employed / कार्यरत',
        'Unemployed' => 'Unemployed / बेरोज़गार',
        'Self Employed' => 'Self Employed / स्व नियोजित',
    ];
    return $st;
}

function getState() {
    $states = ['' => '--Select State --'] + \App\State::orderBy('stateName')->get()->pluck('stateName', 'idState')->toArray();
    return $states;
}

function getDistrict() {
    $district = ['' => '--Select District--'] + \App\District::orderBy('districtName')->get()->pluck('districtName', 'idDistrict')->toArray();
    return $district;
}

?>