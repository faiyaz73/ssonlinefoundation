<?php

/**
 * Map a course title to a matching image in /images.
 */
function sse_course_image($name)
{
    $n = strtolower(trim((string) $name));
    $n = str_replace(['.', '-', '/', '&', '(', ')', ','], ' ', $n);
    $n = preg_replace('/\s+/', ' ', $n);

    $rules = [
        ['b tech m tech', 'images/engineering.jpg'],
        ['electrical and electronics', 'images/electrical-engineering.jpg'],
        ['aeronautical', 'images/aerospace-engineering.jpg'],
        ['b sc agriculture|agriculture diploma|diploma agriculture', 'images/agriculture.jpg'],
        ['b com llb|ba llb|llb|llm|law', 'images/law.jpg'],
        ['bba|mba|management|business|administration|economics|finance', 'images/management.jpg'],
        ['b com|m com|commerce', 'images/commerce.jpg'],
        ['bca|mca|computer science', 'images/computer-science.jpg'],
        ['bjmc|journalism|mass communication|media', 'images/journalism.jpg'],
        ['artificial intelligence|\bai\b', 'images/artificial-intelligence.jpg'],
        ['data science', 'images/data-science.jpg'],
        ['cyber', 'images/cyber-security.jpg'],
        ['rf microwave|microwave', 'images/rf-microwave.jpg'],
        ['civil', 'images/civil-engineering.jpg'],
        ['electrical', 'images/electrical-engineering.jpg'],
        ['mechanical', 'images/mechanical-engineering.jpg'],
        ['aerospace|aeronaut', 'images/aerospace-engineering.jpg'],
        ['bioinformatics', 'images/bioinformatics.jpg'],
        ['biomedical', 'images/biomedical-engineering.jpg'],
        ['biotechnology', 'images/biotechnology.jpg'],
        ['chemical', 'images/chemical-engineering.jpg'],
        ['electronics and communication|electronic.{0,20}communication', 'images/electronics.jpg'],
        ['electronics and instrumentation|electronic and instrumentation', 'images/instrumentation.jpg'],
        ['food process|food', 'images/food-engineering.jpg'],
        ['nanotechnology', 'images/nanotechnology.jpg'],
        ['software', 'images/software-engineering.jpg'],
        ['petroleum', 'images/petroleum-engineering.jpg'],
        ['information technology|\bit\b', 'images/information-technology.jpg'],
        ['computer science|b tech cs|b-tech cs|bca|mca', 'images/computer-science.jpg'],
        ['instrumentation', 'images/instrumentation.jpg'],
        ['electronics|electronic', 'images/electronics.jpg'],
        ['pharma|pharmacy', 'images/pharmacy.jpg'],
        ['physiotherapy|\bbpt\b', 'images/physiotherapy.jpg'],
        ['naturopathy|yogic|\bbnys\b|yoga', 'images/yoga.jpg'],
        ['optometry', 'images/optometry.jpg'],
        ['forensic', 'images/forensic-science.jpg'],
        ['operation theater|\bot etc\b|\bot\b', 'images/operation-theater.jpg'],
        ['cardiac', 'images/cardiac.jpg'],
        ['anaesthesia|anesthesia', 'images/anaesthesia.jpg'],
        ['medical lab|\bmlt\b', 'images/medical-lab.jpg'],
        ['dialysis|renal', 'images/dialysis.jpg'],
        ['neuro', 'images/neuroscience.jpg'],
        ['radiology', 'images/radiology.jpg'],
        ['physician assistant', 'images/physician-assistant.jpg'],
        ['public health|\bbph\b', 'images/public-health.jpg'],
        ['microbiology', 'images/microbiology.jpg'],
        ['nursing|\banm\b|\bgnm\b', 'images/nursing.jpg'],
        ['fire', 'images/fire-safety.jpg'],
        ['mining', 'images/mining.jpg'],
        ['agriculture', 'images/agriculture.jpg'],
        ['photography', 'images/photography.jpg'],
        ['fashion', 'images/fashion-designing.jpg'],
        ['fine art|\bbfa\b|landscape', 'images/fine-arts.jpg'],
        ['hotel|\bbhm\b', 'images/hotel-management.jpg'],
        ['travel|tourism|\bbttm\b', 'images/travel-tourism.jpg'],
        ['mass communication|communication', 'images/journalism.jpg'],
        ['physical|b ped|d ped|bped|dped', 'images/physical-education.jpg'],
        ['\bbed\b|\bmed\b|\bded\b|b ed|m ed|d ed|jbt|bstc|education', 'images/education.jpg'],
        ['zbc', 'images/science-zbc.jpg'],
        ['pcm', 'images/science-pcm.jpg'],
        ['polytechnic', 'images/polytechnic.jpg'],
        ['career counselling|university admission', 'images/education.jpg'],
        ['paramedical', 'images/nursing.jpg'],
        ['technical', 'images/engineering.jpg'],
        ['b tech|m tech|engineering', 'images/engineering.jpg'],
    ];

    foreach ($rules as $rule) {
        if (preg_match('/' . $rule[0] . '/', $n)) {
            return $rule[1];
        }
    }

    return 'images/education.jpg';
}
