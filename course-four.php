<?php

include('include/header.php');
require_once __DIR__ . '/include/course-images.php';

/*
|--------------------------------------------------------------------------
| SS Education Foundation - Course Listing
|--------------------------------------------------------------------------
*/

$courses = [

    // =========================================================
    // B.TECH / M.TECH / TECHNICAL ENGINEERING
    // =========================================================

    [
        'title' => 'B.TECH / M.TECH',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 / 2 Years',
        'image' => 'course-12.jpg',
        'description' => 'Engineering fundamentals, advanced technology and industry-oriented technical skills.',
        'learn' => ['Engineering Fundamentals', 'Technical Skills', 'Industry Applications']
    ],

    [
        'title' => 'B.Tech Computer Science',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-11.jpg',
        'description' => 'Computer science, programming, software development and problem-solving fundamentals.',
        'learn' => ['Programming', 'Data Structures', 'Software Development']
    ],

    [
        'title' => 'B.Tech Artificial Intelligence',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-14.jpg',
        'description' => 'Artificial intelligence, machine learning and intelligent application development.',
        'learn' => ['Artificial Intelligence', 'Machine Learning', 'AI Applications']
    ],

    [
        'title' => 'B.Tech Data Science',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-13.jpg',
        'description' => 'Data analysis, statistics, Python and machine learning for data-driven careers.',
        'learn' => ['Python', 'Data Analysis', 'Machine Learning']
    ],

    [
        'title' => 'B.Tech Cyber Security',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-41.jpg',
        'description' => 'Cyber security, network protection and information security fundamentals.',
        'learn' => ['Cyber Security', 'Network Security', 'Information Protection']
    ],

    [
        'title' => 'B.Tech RF Microwave',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-42.jpg',
        'description' => 'RF systems, microwave engineering and communication technology concepts.',
        'learn' => ['RF Systems', 'Microwave Engineering', 'Communication Technology']
    ],

    [
        'title' => 'B.Tech Civil Engineering',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-43.jpg',
        'description' => 'Construction, structures, surveying and infrastructure engineering fundamentals.',
        'learn' => ['Construction', 'Structural Engineering', 'Surveying']
    ],

    [
        'title' => 'Electrical and Electronics Engineering',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-44.jpg',
        'description' => 'Electrical systems, circuits, electronics and power engineering fundamentals.',
        'learn' => ['Electrical Systems', 'Electronics', 'Power Systems']
    ],

    [
        'title' => 'Mechanical Engineering',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-45.jpg',
        'description' => 'Mechanical systems, design, manufacturing and engineering fundamentals.',
        'learn' => ['Mechanical Design', 'Manufacturing', 'Thermodynamics']
    ],

    [
        'title' => 'Aerospace Engineering',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-12.jpg',
        'description' => 'Aircraft systems, aerodynamics, propulsion and aerospace engineering.',
        'learn' => ['Aerodynamics', 'Aircraft Systems', 'Propulsion']
    ],

    [
        'title' => 'Bioinformatics',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-11.jpg',
        'description' => 'Biology, computing and data analysis for life science applications.',
        'learn' => ['Biology', 'Computing', 'Biological Data Analysis']
    ],

    [
        'title' => 'Biomedical Engineering',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-14.jpg',
        'description' => 'Engineering applications in medical devices, healthcare and diagnostics.',
        'learn' => ['Medical Devices', 'Healthcare Technology', 'Diagnostics']
    ],

    [
        'title' => 'Biotechnology',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-13.jpg',
        'description' => 'Biological sciences, laboratory methods and biotechnology applications.',
        'learn' => ['Biological Science', 'Laboratory Methods', 'Biotechnology']
    ],

    [
        'title' => 'Chemical Engineering',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-41.jpg',
        'description' => 'Chemical processes, industrial production and process engineering.',
        'learn' => ['Chemical Processes', 'Industrial Production', 'Process Design']
    ],

    [
        'title' => 'Electronics and Communication Engineering',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-42.jpg',
        'description' => 'Electronics, communication systems and embedded technology fundamentals.',
        'learn' => ['Electronics', 'Communication Systems', 'Embedded Technology']
    ],

    [
        'title' => 'Electronics and Instrumentation Engineering',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-43.jpg',
        'description' => 'Instrumentation, electronics, sensors and industrial measurement systems.',
        'learn' => ['Instrumentation', 'Sensors', 'Measurement Systems']
    ],

    [
        'title' => 'Food Process Engineering',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-44.jpg',
        'description' => 'Food processing, preservation, production and quality control.',
        'learn' => ['Food Processing', 'Quality Control', 'Food Technology']
    ],

    [
        'title' => 'Information Technology',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-45.jpg',
        'description' => 'Programming, databases, networking and modern information technology.',
        'learn' => ['Programming', 'Databases', 'Networking']
    ],

    [
        'title' => 'Instrumentation & Control Engineering',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-12.jpg',
        'description' => 'Sensors, automation, industrial measurement and control systems.',
        'learn' => ['Automation', 'Sensors', 'Control Systems']
    ],

    [
        'title' => 'Nanotechnology',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-11.jpg',
        'description' => 'Nanoscale materials, technologies and applications in modern engineering.',
        'learn' => ['Nanomaterials', 'Nanotechnology', 'Engineering Applications']
    ],

    [
        'title' => 'Software Engineering',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-14.jpg',
        'description' => 'Software development, testing, design and software engineering practices.',
        'learn' => ['Software Development', 'Testing', 'Software Design']
    ],

    [
        'title' => 'Aeronautics Engineering',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-13.jpg',
        'description' => 'Aircraft technology, aerodynamics and aviation engineering fundamentals.',
        'learn' => ['Aircraft Technology', 'Aerodynamics', 'Aviation Engineering']
    ],

    [
        'title' => 'Petroleum Engineering',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '4 Years',
        'image' => 'course-41.jpg',
        'description' => 'Petroleum exploration, drilling, production and energy sector fundamentals.',
        'learn' => ['Exploration', 'Drilling', 'Petroleum Production']
    ],

    [
        'title' => 'B.Sc. Information Technology',
        'category' => 'B.Tech / M.Tech',
        'type' => 'Technical',
        'duration' => '3 Years',
        'image' => 'course-42.jpg',
        'description' => 'Information technology, programming, databases and computer applications.',
        'learn' => ['Programming', 'Database', 'IT Applications']
    ],

    // =========================================================
    // PARAMEDICAL
    // =========================================================

    [
        'title' => 'Pharma D',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => '6 Years',
        'image' => 'course-43.jpg',
        'description' => 'Pharmacy education with clinical and patient-care oriented learning.',
        'learn' => ['Pharmacy', 'Clinical Practice', 'Patient Care']
    ],

    [
        'title' => 'Bachelor of Physiotherapy (BPT)',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => 'Program',
        'image' => 'course-44.jpg',
        'description' => 'Physiotherapy, rehabilitation and exercise therapy focused education.',
        'learn' => ['Physiotherapy', 'Rehabilitation', 'Exercise Therapy']
    ],

    [
        'title' => 'Bachelor of Naturopathy & Yogic Science (BNYS)',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => 'Program',
        'image' => 'course-45.jpg',
        'description' => 'Naturopathy, yoga and holistic wellness education.',
        'learn' => ['Naturopathy', 'Yoga', 'Wellness']
    ],

    [
        'title' => 'B.Sc. in Optometry Technology',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => '3 Years',
        'image' => 'course-12.jpg',
        'description' => 'Optometry technology, eye care and vision-related healthcare education.',
        'learn' => ['Optometry', 'Eye Care', 'Vision Technology']
    ],

    [
        'title' => 'B.Sc. Forensic Science',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => '3 Years',
        'image' => 'course-11.jpg',
        'description' => 'Scientific techniques used in forensic investigation and evidence analysis.',
        'learn' => ['Forensic Science', 'Evidence Analysis', 'Investigation']
    ],

    [
        'title' => 'B.Sc. Operation Theater Technology',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => '3 Years',
        'image' => 'course-14.jpg',
        'description' => 'Operation theater procedures, equipment and clinical support skills.',
        'learn' => ['OT Procedures', 'Medical Equipment', 'Clinical Support']
    ],

    [
        'title' => 'B.Sc. Cardiac Technology',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => '3 Years',
        'image' => 'course-13.jpg',
        'description' => 'Cardiac care, diagnostic procedures and cardiovascular technology.',
        'learn' => ['Cardiac Care', 'Diagnostics', 'Cardiovascular Technology']
    ],

    [
        'title' => 'B.Sc. Anaesthesia Technology',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => '3 Years',
        'image' => 'course-41.jpg',
        'description' => 'Anaesthesia procedures, equipment and operation theater support.',
        'learn' => ['Anaesthesia', 'OT Support', 'Medical Equipment']
    ],

    [
        'title' => 'B.Sc. Medical Lab Technology',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => '3 Years',
        'image' => 'course-42.jpg',
        'description' => 'Medical laboratory techniques, testing and diagnostic procedures.',
        'learn' => ['Laboratory Testing', 'Diagnostics', 'Medical Technology']
    ],

    [
        'title' => 'B.Sc. Renal Dialysis Technology',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => '3 Years',
        'image' => 'course-43.jpg',
        'description' => 'Dialysis technology and patient support for renal care.',
        'learn' => ['Dialysis', 'Renal Care', 'Patient Support']
    ],

    [
        'title' => 'B.Sc. Neuro Science Technology',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => '3 Years',
        'image' => 'course-44.jpg',
        'description' => 'Neuroscience technology, neurological diagnostics and healthcare support.',
        'learn' => ['Neuroscience', 'Diagnostics', 'Healthcare Technology']
    ],

    [
        'title' => 'B.Sc. Radiology',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => '3 Years',
        'image' => 'course-45.jpg',
        'description' => 'Radiology technology and diagnostic imaging procedures.',
        'learn' => ['Radiology', 'Medical Imaging', 'Diagnostics']
    ],

    [
        'title' => 'B.Sc. Physician Assistant',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => '3 Years',
        'image' => 'course-12.jpg',
        'description' => 'Clinical assistance, patient care and healthcare support education.',
        'learn' => ['Patient Care', 'Clinical Assistance', 'Healthcare Support']
    ],

    [
        'title' => 'Integrated B.Pharm',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => 'Program',
        'image' => 'course-11.jpg',
        'description' => 'Integrated pharmacy education covering pharmaceutical sciences and practice.',
        'learn' => ['Pharmaceutical Science', 'Pharmacy Practice', 'Medicines']
    ],

    [
        'title' => 'ANM',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => 'Program',
        'image' => 'course-14.jpg',
        'description' => 'Auxiliary nursing and community healthcare focused education.',
        'learn' => ['Nursing Care', 'Community Health', 'Patient Care']
    ],

    [
        'title' => 'GNM',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => 'Program',
        'image' => 'course-13.jpg',
        'description' => 'General nursing education with clinical and patient-care learning.',
        'learn' => ['General Nursing', 'Clinical Care', 'Patient Management']
    ],

    [
        'title' => 'PB Nursing',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => 'Program',
        'image' => 'course-41.jpg',
        'description' => 'Professional nursing education focused on advanced nursing skills.',
        'learn' => ['Nursing Skills', 'Clinical Practice', 'Patient Care']
    ],

    [
        'title' => 'B.Pharmacy',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => '4 Years',
        'image' => 'course-42.jpg',
        'description' => 'Pharmaceutical science, medicines, pharmacy practice and healthcare.',
        'learn' => ['Pharmaceutical Science', 'Pharmacy', 'Healthcare']
    ],

    [
        'title' => 'D.Pharmacy',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => '2 Years',
        'image' => 'course-43.jpg',
        'description' => 'Diploma-level pharmacy education and pharmaceutical practices.',
        'learn' => ['Pharmacy Basics', 'Medicines', 'Pharmacy Practice']
    ],

    [
        'title' => 'B.Sc Nursing',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => 'Program',
        'image' => 'course-44.jpg',
        'description' => 'Professional nursing education with clinical and healthcare training.',
        'learn' => ['Nursing', 'Clinical Training', 'Healthcare']
    ],

    [
        'title' => 'BPH - Bachelor of Public Health',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => '3 Years',
        'image' => 'course-45.jpg',
        'description' => 'Public health, community healthcare and health management education.',
        'learn' => ['Public Health', 'Community Health', 'Health Management']
    ],

    [
        'title' => 'B.Sc. Medical Microbiology',
        'category' => 'Paramedical',
        'type' => 'Paramedical',
        'duration' => '3 Years',
        'image' => 'course-12.jpg',
        'description' => 'Microbiology, laboratory techniques and medical diagnostic concepts.',
        'learn' => ['Microbiology', 'Laboratory Techniques', 'Diagnostics']
    ],

    // =========================================================
    // DIPLOMA
    // =========================================================

    [
        'title' => 'Polytechnic',
        'category' => 'Diploma',
        'type' => 'Diploma',
        'duration' => 'Program',
        'image' => 'course-11.jpg',
        'description' => 'Technical diploma education with practical and engineering-oriented learning.',
        'learn' => ['Technical Skills', 'Practical Training', 'Engineering Basics']
    ],

    [
        'title' => 'Diploma in Computer Science',
        'category' => 'Diploma',
        'type' => 'Diploma',
        'duration' => 'Program',
        'image' => 'course-14.jpg',
        'description' => 'Computer fundamentals, programming and software application skills.',
        'learn' => ['Computer Science', 'Programming', 'Applications']
    ],

    [
        'title' => 'Diploma in Electronic & Communication',
        'category' => 'Diploma',
        'type' => 'Diploma',
        'duration' => 'Program',
        'image' => 'course-13.jpg',
        'description' => 'Electronics and communication technology with practical learning.',
        'learn' => ['Electronics', 'Communication', 'Practical Skills']
    ],

    [
        'title' => 'Diploma in Mechanical',
        'category' => 'Diploma',
        'type' => 'Diploma',
        'duration' => 'Program',
        'image' => 'course-41.jpg',
        'description' => 'Mechanical engineering fundamentals, design and manufacturing.',
        'learn' => ['Mechanical Basics', 'Design', 'Manufacturing']
    ],

    [
        'title' => 'Diploma in Aeronautical',
        'category' => 'Diploma',
        'type' => 'Diploma',
        'duration' => 'Program',
        'image' => 'course-42.jpg',
        'description' => 'Aeronautical engineering and aviation technology fundamentals.',
        'learn' => ['Aeronautics', 'Aircraft Technology', 'Aviation']
    ],

    [
        'title' => 'Diploma in Fire & Safety',
        'category' => 'Diploma',
        'type' => 'Diploma',
        'duration' => 'Program',
        'image' => 'course-43.jpg',
        'description' => 'Fire prevention, safety management and emergency response fundamentals.',
        'learn' => ['Fire Safety', 'Risk Management', 'Emergency Response']
    ],

    [
        'title' => 'Diploma in Mining',
        'category' => 'Diploma',
        'type' => 'Diploma',
        'duration' => 'Program',
        'image' => 'course-44.jpg',
        'description' => 'Mining technology, operations and safety fundamentals.',
        'learn' => ['Mining Technology', 'Mining Operations', 'Safety']
    ],

    [
        'title' => 'Diploma in Agriculture',
        'category' => 'Diploma',
        'type' => 'Diploma',
        'duration' => 'Program',
        'image' => 'course-45.jpg',
        'description' => 'Agriculture science, farming practices and modern agricultural techniques.',
        'learn' => ['Agriculture', 'Farming', 'Modern Techniques']
    ],

    [
        'title' => 'Diploma in Yoga',
        'category' => 'Diploma',
        'type' => 'Diploma',
        'duration' => 'Program',
        'image' => 'course-12.jpg',
        'description' => 'Yoga practices, wellness and holistic health education.',
        'learn' => ['Yoga', 'Wellness', 'Health Practices']
    ],

    [
        'title' => 'Agriculture Diploma',
        'category' => 'Diploma',
        'type' => 'Diploma',
        'duration' => 'Program',
        'image' => 'course-11.jpg',
        'description' => 'Practical agriculture education and modern farming techniques.',
        'learn' => ['Agriculture', 'Crop Management', 'Farming']
    ],

    [
        'title' => 'Diploma OT-ETC',
        'category' => 'Diploma',
        'type' => 'Diploma',
        'duration' => 'Program',
        'image' => 'course-14.jpg',
        'description' => 'Operation theater technology and clinical support fundamentals.',
        'learn' => ['Operation Theater', 'Clinical Support', 'Medical Equipment']
    ],

    [
        'title' => 'Diploma in Civil Engineering',
        'category' => 'Diploma',
        'type' => 'Diploma',
        'duration' => 'Program',
        'image' => 'course-13.jpg',
        'description' => 'Civil engineering, construction and infrastructure fundamentals.',
        'learn' => ['Civil Engineering', 'Construction', 'Surveying']
    ],

    [
        'title' => 'Diploma in Electrical Engineering',
        'category' => 'Diploma',
        'type' => 'Diploma',
        'duration' => 'Program',
        'image' => 'course-41.jpg',
        'description' => 'Electrical systems, circuits and practical electrical engineering.',
        'learn' => ['Electrical Systems', 'Circuits', 'Practical Training']
    ],

    [
        'title' => 'Diploma in Photography',
        'category' => 'Diploma',
        'type' => 'Diploma',
        'duration' => 'Program',
        'image' => 'course-42.jpg',
        'description' => 'Photography techniques, composition, camera handling and creative skills.',
        'learn' => ['Photography', 'Camera Handling', 'Creative Skills']
    ],

    // =========================================================
    // NON TECHNICAL
    // =========================================================

    [
        'title' => 'B.Sc. Agriculture',
        'category' => 'Non-Technical',
        'type' => 'Undergraduate',
        'duration' => '3 / 4 Years',
        'image' => 'course-43.jpg',
        'description' => 'Agriculture science, crop production and modern farming practices.',
        'learn' => ['Agriculture Science', 'Crop Production', 'Farming']
    ],

    [
        'title' => 'B.Sc. ZBC',
        'category' => 'Non-Technical',
        'type' => 'Undergraduate',
        'duration' => '3 Years',
        'image' => 'course-44.jpg',
        'description' => 'Zoology, Botany and Chemistry based science education.',
        'learn' => ['Zoology', 'Botany', 'Chemistry']
    ],

    [
        'title' => 'B.Sc. PCM',
        'category' => 'Non-Technical',
        'type' => 'Undergraduate',
        'duration' => '3 Years',
        'image' => 'course-45.jpg',
        'description' => 'Physics, Chemistry and Mathematics focused science education.',
        'learn' => ['Physics', 'Chemistry', 'Mathematics']
    ],

    [
        'title' => 'B.A. LLB - 5 Years',
        'category' => 'Non-Technical',
        'type' => 'Undergraduate',
        'duration' => '5 Years',
        'image' => 'course-12.jpg',
        'description' => 'Integrated arts and law education for legal studies.',
        'learn' => ['Law', 'Legal Studies', 'Arts']
    ],

    [
        'title' => 'B.Com LLB - 5 Years',
        'category' => 'Non-Technical',
        'type' => 'Undergraduate',
        'duration' => '5 Years',
        'image' => 'course-11.jpg',
        'description' => 'Integrated commerce and law education with legal and business concepts.',
        'learn' => ['Commerce', 'Law', 'Business Studies']
    ],

    [
        'title' => 'LLB',
        'category' => 'Non-Technical',
        'type' => 'Undergraduate',
        'duration' => 'Program',
        'image' => 'course-14.jpg',
        'description' => 'Legal education covering core concepts of law and legal practice.',
        'learn' => ['Legal Studies', 'Law', 'Legal Practice']
    ],

    [
        'title' => 'B.Sc. Fashion Designing',
        'category' => 'Non-Technical',
        'type' => 'Undergraduate',
        'duration' => '3 Years',
        'image' => 'course-13.jpg',
        'description' => 'Fashion design, creative development, textiles and design techniques.',
        'learn' => ['Fashion Design', 'Textiles', 'Creative Design']
    ],

    [
        'title' => 'BFA - Bachelor of Fine Arts',
        'category' => 'Non-Technical',
        'type' => 'Undergraduate',
        'duration' => 'Program',
        'image' => 'course-41.jpg',
        'description' => 'Fine arts education focused on creativity, visual art and artistic practice.',
        'learn' => ['Fine Arts', 'Visual Art', 'Creative Practice']
    ],

    [
        'title' => 'BHM - Bachelor of Hotel Management',
        'category' => 'Non-Technical',
        'type' => 'Undergraduate',
        'duration' => 'Program',
        'image' => 'course-42.jpg',
        'description' => 'Hospitality, hotel operations, food service and management education.',
        'learn' => ['Hospitality', 'Hotel Management', 'Food Service']
    ],

    [
        'title' => 'BTTM - Bachelor of Travel & Tourism',
        'category' => 'Non-Technical',
        'type' => 'Undergraduate',
        'duration' => 'Program',
        'image' => 'course-43.jpg',
        'description' => 'Travel, tourism, hospitality and destination management education.',
        'learn' => ['Travel Management', 'Tourism', 'Hospitality']
    ],

    // =========================================================
    // EDUCATION & OTHERS
    // =========================================================

    [
        'title' => 'BBA',
        'category' => 'Education & Others',
        'type' => 'Undergraduate',
        'duration' => '3 Years',
        'image' => 'course-44.jpg',
        'description' => 'Business administration, management and professional business skills.',
        'learn' => ['Business Management', 'Marketing', 'Management Skills']
    ],

    [
        'title' => 'MBA',
        'category' => 'Education & Others',
        'type' => 'Postgraduate',
        'duration' => '2 Years',
        'image' => 'course-45.jpg',
        'description' => 'Advanced business management, leadership and organizational skills.',
        'learn' => ['Management', 'Leadership', 'Business Strategy']
    ],

    [
        'title' => 'BCA',
        'category' => 'Education & Others',
        'type' => 'Undergraduate',
        'duration' => '3 Years',
        'image' => 'course-12.jpg',
        'description' => 'Computer applications, programming and software development fundamentals.',
        'learn' => ['Programming', 'Computer Applications', 'Software Development']
    ],

    [
        'title' => 'MCA',
        'category' => 'Education & Others',
        'type' => 'Postgraduate',
        'duration' => '2 Years',
        'image' => 'course-11.jpg',
        'description' => 'Advanced computer applications, programming and software technologies.',
        'learn' => ['Advanced Programming', 'Software Technology', 'Computer Applications']
    ],

    [
        'title' => 'B.Com',
        'category' => 'Education & Others',
        'type' => 'Undergraduate',
        'duration' => '3 Years',
        'image' => 'course-14.jpg',
        'description' => 'Commerce, accounting, finance and business fundamentals.',
        'learn' => ['Accounting', 'Finance', 'Commerce']
    ],

    [
        'title' => 'M.Com',
        'category' => 'Education & Others',
        'type' => 'Postgraduate',
        'duration' => '2 Years',
        'image' => 'course-13.jpg',
        'description' => 'Advanced commerce, accounting, finance and business studies.',
        'learn' => ['Advanced Commerce', 'Finance', 'Accounting']
    ],

    [
        'title' => 'LLM',
        'category' => 'Education & Others',
        'type' => 'Postgraduate',
        'duration' => 'Program',
        'image' => 'course-41.jpg',
        'description' => 'Advanced legal studies and specialized areas of law.',
        'learn' => ['Advanced Law', 'Legal Research', 'Specialized Law']
    ],

    [
        'title' => 'B.A. B.Ed.',
        'category' => 'Education & Others',
        'type' => 'Education',
        'duration' => 'Program',
        'image' => 'course-42.jpg',
        'description' => 'Integrated arts and teacher education for teaching careers.',
        'learn' => ['Arts', 'Education', 'Teaching Skills']
    ],

    [
        'title' => 'B.Ed.',
        'category' => 'Education & Others',
        'type' => 'Education',
        'duration' => 'Program',
        'image' => 'course-43.jpg',
        'description' => 'Professional teacher education and classroom teaching skills.',
        'learn' => ['Teacher Education', 'Pedagogy', 'Classroom Skills']
    ],

    [
        'title' => 'M.Ed.',
        'category' => 'Education & Others',
        'type' => 'Education',
        'duration' => 'Program',
        'image' => 'course-44.jpg',
        'description' => 'Advanced education studies, teaching methodology and educational research.',
        'learn' => ['Educational Research', 'Teaching Methodology', 'Education Studies']
    ],

    [
        'title' => 'D.Ed. (JBT/BSTC)',
        'category' => 'Education & Others',
        'type' => 'Education',
        'duration' => 'Program',
        'image' => 'course-45.jpg',
        'description' => 'Elementary teacher education and foundational teaching skills.',
        'learn' => ['Teaching Skills', 'Child Education', 'Pedagogy']
    ],

    [
        'title' => 'B.Ped. - Bachelor of Physical Education',
        'category' => 'Education & Others',
        'type' => 'Education',
        'duration' => 'Program',
        'image' => 'course-12.jpg',
        'description' => 'Physical education, sports, fitness and training fundamentals.',
        'learn' => ['Physical Education', 'Sports', 'Fitness']
    ],

    [
        'title' => 'D.Ped. - Diploma in Physical Education',
        'category' => 'Education & Others',
        'type' => 'Education',
        'duration' => 'Program',
        'image' => 'course-11.jpg',
        'description' => 'Diploma-level physical education, sports and fitness training.',
        'learn' => ['Physical Education', 'Sports Training', 'Fitness']
    ],

    [
        'title' => 'Bachelor of Journalism & Mass Communication',
        'category' => 'Education & Others',
        'type' => 'Education',
        'duration' => 'Program',
        'image' => 'course-14.jpg',
        'description' => 'Journalism, mass communication, media and digital communication.',
        'learn' => ['Journalism', 'Mass Communication', 'Digital Media']
    ]
];


/*
|--------------------------------------------------------------------------
| REMOVE DUPLICATES
|--------------------------------------------------------------------------
*/

$uniqueCourses = [];

foreach ($courses as $course) {
    $uniqueCourses[$course['title']] = $course;
}

$courses = array_values($uniqueCourses);


/*
|--------------------------------------------------------------------------
| SEARCH
|--------------------------------------------------------------------------
*/

$search = isset($_GET['search'])
    ? trim($_GET['search'])
    : '';


/*
|--------------------------------------------------------------------------
| CATEGORY FILTER
|--------------------------------------------------------------------------
*/

$selectedCategory = isset($_GET['category'])
    ? trim($_GET['category'])
    : '';


/*
|--------------------------------------------------------------------------
| SAVE ORIGINAL DATA FOR COUNTS
|--------------------------------------------------------------------------
*/

$allCoursesForCount = $courses;


/*
|--------------------------------------------------------------------------
| SEARCH FILTER
|--------------------------------------------------------------------------
*/

if ($search !== '') {

    $courses = array_filter($courses, function ($course) use ($search) {

        return (
            stripos($course['title'], $search) !== false ||
            stripos($course['category'], $search) !== false ||
            stripos($course['description'], $search) !== false
        );

    });

    $courses = array_values($courses);
}


/*
|--------------------------------------------------------------------------
| CATEGORY FILTER
|--------------------------------------------------------------------------
*/

if ($selectedCategory !== '') {

    $courses = array_filter($courses, function ($course) use ($selectedCategory) {

        return $course['category'] === $selectedCategory;

    });

    $courses = array_values($courses);
}


/*
|--------------------------------------------------------------------------
| CATEGORY COUNTS
|--------------------------------------------------------------------------
*/

$categoryCounts = [];

foreach ($allCoursesForCount as $course) {

    $category = $course['category'];

    if (!isset($categoryCounts[$category])) {
        $categoryCounts[$category] = 0;
    }

    $categoryCounts[$category]++;
}


/*
|--------------------------------------------------------------------------
| PAGINATION
|--------------------------------------------------------------------------
*/

$perPage = 12;

$totalCourses = count($courses);

$totalPages = max(
    1,
    (int) ceil($totalCourses / $perPage)
);

$currentPage = isset($_GET['page'])
    ? max(1, (int) $_GET['page'])
    : 1;

$currentPage = min(
    $currentPage,
    $totalPages
);

$start = ($currentPage - 1) * $perPage;

$displayCourses = array_slice(
    $courses,
    $start,
    $perPage
);

?>

<style>

/* =========================================================
   COURSE PAGE
========================================================= */

.course-page-wrapper {
    background: #f7f9fc;
}


/* =========================================================
   BREADCRUMB
========================================================= */

.course-breadcrumb-area {
    position: relative;
    overflow: hidden;
    padding: 95px 0 85px;
    background:
        linear-gradient(
            135deg,
            rgba(152, 58, 3, 0.96),
            rgba(218, 107, 60, 0.94)
        );
}

.course-breadcrumb-area:before {
    content: "";
    position: absolute;
    width: 350px;
    height: 350px;
    border-radius: 50%;
    background: rgba(255,255,255,.07);
    top: -170px;
    right: -80px;
}

.course-breadcrumb-area:after {
    content: "";
    position: absolute;
    width: 250px;
    height: 250px;
    border-radius: 50%;
    background: rgba(255,255,255,.05);
    bottom: -150px;
    left: -70px;
}

.course-breadcrumb-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: #fff;
}

.course-breadcrumb-content .small-title {
    display: inline-block;
    padding: 7px 18px;
    border-radius: 30px;
    background: rgba(255,255,255,.14);
    border: 1px solid rgba(255,255,255,.20);
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 15px;
    letter-spacing: .5px;
}

.course-breadcrumb-content h1 {
    color: #fff;
    font-size: 48px;
    font-weight: 800;
    margin-bottom: 12px;
}

.course-breadcrumb-content p {
    max-width: 720px;
    margin: auto;
    color: rgba(255,255,255,.82);
    font-size: 16px;
}

.course-breadcrumb-links {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 20px;
    padding: 0;
    list-style: none;
}

.course-breadcrumb-links li {
    color: rgba(255,255,255,.8);
}

.course-breadcrumb-links a {
    color: #fff;
}


/* =========================================================
   INTRO
========================================================= */

.course-intro {
    padding: 75px 0 30px;
}

.course-intro-heading {
    max-width: 760px;
}

.course-intro-heading .subtitle {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #3157a6;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 12px;
}

.course-intro-heading h2 {
    font-size: 38px;
    line-height: 1.2;
    font-weight: 800;
    margin-bottom: 15px;
}

.course-intro-heading p {
    color:rgb(42, 169, 17);
    font-size: 16px;
    line-height: 1.8;
}


/* =========================================================
   MAIN COURSE AREA
========================================================= */

.course-main-area {
    padding: 30px 0 90px;
}

.course-sidebar-box {
    background: #fff;
    border-radius: 18px;
    padding: 25px;
    border: 1px solid #edf0f5;
    box-shadow: 0 10px 35px rgba(25, 40, 70, .06);
    position: sticky;
    top: 100px;
}

.course-widget {
    padding-bottom: 25px;
    margin-bottom: 25px;
    border-bottom: 1px solid #edf0f5;
}

.course-widget:last-child {
    border-bottom: 0;
    margin-bottom: 0;
    padding-bottom: 0;
}

.course-widget-title {
    font-size: 18px;
    font-weight: 750;
    margin-bottom: 18px;
    color: #202124;
}


/* =========================================================
   SEARCH
========================================================= */

.course-search {
    position: relative;
}

.course-search input {
    width: 100%;
    height: 52px;
    border-radius: 10px;
    border: 1px solid #e3e7ee;
    background: #fafbfd;
    padding: 0 55px 0 16px;
    font-size: 14px;
    outline: none;
    transition: .3s;
}

.course-search input:focus {
    border-color: #3157a6;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(49,87,166,.08);
}

.course-search button {
    position: absolute;
    right: 6px;
    top: 6px;
    width: 40px;
    height: 40px;
    border: 0;
    border-radius: 8px;
    background: #3157a6;
    color: #fff;
    cursor: pointer;
}


/* =========================================================
   CATEGORY LIST
========================================================= */

.course-category-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.course-category-list li {
    margin-bottom: 7px;
}

.course-category-list li a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 10px;
    padding: 12px 13px;
    border-radius: 10px;
    color: #555;
    font-size: 14px;
    font-weight: 500;
    transition: .3s;
}

.course-category-list li a:hover,
.course-category-list li.active a {
    background: #edf4ff;
    color: #3157a6;
    transform: translateX(3px);
}

.course-count {
    min-width: 28px;
    height: 25px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    border-radius: 20px;
    background: #f1f3f7;
    color: #666;
    font-size: 12px;
    font-weight: 700;
}

.course-category-list li.active .course-count {
    background: #3157a6;
    color: #fff;
}


/* =========================================================
   ADMISSION BOX
========================================================= */

.admission-box {
    position: relative;
    overflow: hidden;
    padding: 25px;
    border-radius: 15px;
    background:
        linear-gradient(
            135deg,
            #3157a6,
            #663ca6
        );
    color: #fff;
}

.admission-box:after {
    content: "";
    position: absolute;
    width: 130px;
    height: 130px;
    border-radius: 50%;
    right: -45px;
    bottom: -60px;
    background: rgba(255,255,255,.08);
}

.admission-box h4 {
    position: relative;
    z-index: 2;
    color: #fff;
    font-size: 20px;
    margin-bottom: 10px;
}

.admission-box p {
    position: relative;
    z-index: 2;
    color: rgba(255,255,255,.82);
    font-size: 14px;
    line-height: 1.7;
    margin-bottom: 18px;
}

.admission-box .edu-btn {
    position: relative;
    z-index: 2;
    background: #fff;
    color: #3157a6;
}


/* =========================================================
   COURSE TOP BAR
========================================================= */

.course-topbar {
    background: #fff;
    border: 1px solid #edf0f5;
    border-radius: 16px;
    padding: 20px 22px;
    margin-bottom: 28px;
    box-shadow: 0 7px 25px rgba(20, 35, 60, .04);
}

.course-result-title h3 {
    margin-bottom: 5px;
    font-size: 23px;
    font-weight: 750;
}

.course-result-title p {
    margin: 0;
    color: #777;
    font-size: 14px;
}

.course-sort select {
    min-width: 170px;
    height: 45px;
    border: 1px solid #e4e7ed;
    border-radius: 8px;
    padding: 0 14px;
    color: #555;
    background: #fff;
    outline: none;
}


/* =========================================================
   COURSE CARD
========================================================= */

.course-card {
    height: 100%;
    background: #fff;
    border-radius: 18px;
    overflow: hidden;
    border: 1px solid #edf0f5;
    box-shadow: 0 10px 35px rgba(20, 35, 60, .055);
    transition: all .35s ease;
}

.course-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(20, 35, 60, .13);
}


/* IMAGE */

.course-card-image {
    position: relative;
    overflow: hidden;
    height: 225px;
}

.course-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .5s ease;
}

.course-card:hover .course-card-image img {
    transform: scale(1.08);
}

.course-image-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to top,
        rgba(0,0,0,.35),
        transparent 55%
    );
}


/* BADGES */

.course-category {
    position: absolute;
    left: 15px;
    top: 15px;
    z-index: 2;
    padding: 7px 12px;
    border-radius: 30px;
    background: rgba(255,255,255,.95);
    color: #3157a6;
    font-size: 11px;
    font-weight: 700;
}

.course-duration {
    position: absolute;
    right: 15px;
    bottom: 15px;
    z-index: 2;
    padding: 7px 12px;
    border-radius: 30px;
    background: rgba(0,0,0,.65);
    color: #fff;
    font-size: 11px;
    font-weight: 600;
}


/* CARD CONTENT */

.course-card-content {
    padding: 22px;
}

.course-type {
    color: #3157a6;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .6px;
    margin-bottom: 8px;
}

.course-card-title {
    font-size: 19px;
    line-height: 1.4;
    font-weight: 750;
    margin-bottom: 10px;
}

.course-card-title a {
    color: #202124;
    transition: .3s;
}

.course-card-title a:hover {
    color: #3157a6;
}

.course-card-description {
    color: #777;
    font-size: 14px;
    line-height: 1.7;
    min-height: 72px;
    margin-bottom: 15px;
}


/* META */

.course-card-meta {
    display: flex;
    justify-content: space-between;
    gap: 10px;
    padding: 13px 0;
    border-top: 1px solid #edf0f5;
    border-bottom: 1px solid #edf0f5;
}

.course-card-meta span {
    color: #777;
    font-size: 12px;
}

.course-card-meta i {
    color: #3157a6;
    margin-right: 5px;
}


/* FOOTER */

.course-card-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 10px;
    margin-top: 17px;
}

.course-open {
    color: #198754;
    font-size: 12px;
    font-weight: 700;
}

.course-details-link {
    font-size: 13px;
    font-weight: 700;
    color: #3157a6;
}

.course-details-link i {
    margin-left: 4px;
    transition: .3s;
}

.course-details-link:hover i {
    margin-left: 8px;
}


/* =========================================================
   PAGINATION
========================================================= */

.course-pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
    margin-top: 45px;
}

.course-pagination a {
    width: 42px;
    height: 42px;
    border-radius: 9px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #e2e6ed;
    background: #fff;
    color: #555;
    font-size: 13px;
    font-weight: 700;
    transition: .3s;
}

.course-pagination a:hover,
.course-pagination a.active {
    background: #3157a6;
    color: #fff;
    border-color: #3157a6;
}

.course-pagination .wide {
    width: auto;
    padding: 0 17px;
}


/* =========================================================
   EMPTY
========================================================= */

.course-empty {
    background: #fff;
    border-radius: 18px;
    padding: 75px 30px;
    text-align: center;
    border: 1px solid #edf0f5;
}

.course-empty-icon {
    width: 75px;
    height: 75px;
    margin: 0 auto 20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #edf4ff;
    color: #3157a6;
    font-size: 30px;
}

.course-empty h3 {
    font-size: 25px;
    margin-bottom: 10px;
}

.course-empty p {
    color: #777;
    margin-bottom: 25px;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width: 991px) {

    .course-sidebar-box {
        position: static;
        margin-bottom: 30px;
    }

    .course-breadcrumb-content h1 {
        font-size: 38px;
    }

    .course-intro-heading h2 {
        font-size: 32px;
    }
}


@media(max-width: 767px) {

    .course-breadcrumb-area {
        padding: 70px 0;
    }

    .course-breadcrumb-content h1 {
        font-size: 30px;
    }

    .course-intro {
        padding-top: 55px;
    }

    .course-intro-heading h2 {
        font-size: 27px;
    }

    .course-topbar {
        padding: 18px;
    }

    .course-result-title h3 {
        font-size: 20px;
    }

    .course-sort select {
        width: 100%;
    }

    .course-card-image {
        height: 210px;
    }

    .course-card-content {
        padding: 18px;
    }
}


</style>


<!-- =========================================================
     BREADCRUMB / HERO
========================================================= -->

<section class="course-breadcrumb-area">

    <div class="container">

        <div class="course-breadcrumb-content">

            <span class="small-title">
                <i class="icon-1"></i>
                SS Education Foundation
            </span>

            <h1>
                Our Courses
            </h1>

            <p>
                Explore our wide range of technical, paramedical,
                diploma, undergraduate, postgraduate and education
                programs designed for academic and professional growth.
            </p>

            <ul class="course-breadcrumb-links">

                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>

                <li>
                    /
                </li>

                <li>
                    Courses
                </li>

            </ul>

        </div>

    </div>

</section>


<!-- =========================================================
     INTRO
========================================================= -->

<section class="course-intro">

    <div class="container">

        <div class="course-intro-heading">

            <span class="subtitle">
                <i class="icon-1"></i>
                Academic Programs
            </span>

            <h2>
                Find the Right Course for Your Future
            </h2>

            <p>
                Choose from our diverse range of academic and
                professional programs. Explore course details,
                duration and learning areas before making your
                admission decision.
            </p>

        </div>

    </div>

</section>


<!-- =========================================================
     COURSE MAIN AREA
========================================================= -->

<section class="course-main-area">

    <div class="container">

        <div class="row g-4">

            <!-- =================================================
                 SIDEBAR
            ================================================== -->

            <div class="col-lg-3">

                <div class="course-sidebar-box">


                    <!-- SEARCH -->

                    <div class="course-widget">

                        <h4 class="course-widget-title">
                            Search Courses
                        </h4>

                        <form method="GET">

                            <?php if ($selectedCategory !== ''): ?>

                                <input
                                    type="hidden"
                                    name="category"
                                    value="<?= htmlspecialchars($selectedCategory); ?>"
                                >

                            <?php endif; ?>


                            <div class="course-search">

                                <input
                                    type="text"
                                    name="search"
                                    value="<?= htmlspecialchars($search); ?>"
                                    placeholder="Search course..."
                                >

                                <button type="submit">
                                    <i class="icon-2"></i>
                                </button>

                            </div>

                        </form>

                    </div>


                    <!-- CATEGORIES -->

                    <div class="course-widget">

                        <h4 class="course-widget-title">
                            Course Categories
                        </h4>

                        <ul class="course-category-list">

                            <?php foreach ($categoryCounts as $category => $count): ?>

                                <li
                                    class="<?= ($selectedCategory === $category) ? 'active' : ''; ?>"
                                >

                                    <a
                                        href="?category=<?= urlencode($category); ?>"
                                    >

                                        <span>
                                            <?= htmlspecialchars($category); ?>
                                        </span>

                                        <span class="course-count">
                                            <?= $count; ?>
                                        </span>

                                    </a>

                                </li>

                            <?php endforeach; ?>

                        </ul>


                        <?php if ($search !== '' || $selectedCategory !== ''): ?>

                            <a
                                href="all-courses.php"
                                style="
                                    display:inline-block;
                                    margin-top:15px;
                                    color:#3157a6;
                                    font-size:13px;
                                    font-weight:600;
                                "
                            >

                                <i class="icon-4"></i>

                                Reset Filters

                            </a>

                        <?php endif; ?>

                    </div>


                    <!-- COURSE TYPES -->

                    <div class="course-widget">

                        <h4 class="course-widget-title">
                            Course Types
                        </h4>

                        <ul class="course-category-list">

                            <li>
                                <a href="?category=B.Tech%20%2F%20M.Tech">
                                    <span>Technical</span>
                                </a>
                            </li>

                            <li>
                                <a href="?category=Paramedical">
                                    <span>Paramedical</span>
                                </a>
                            </li>

                            <li>
                                <a href="?category=Diploma">
                                    <span>Diploma</span>
                                </a>
                            </li>

                            <li>
                                <a href="?category=Non-Technical">
                                    <span>Undergraduate</span>
                                </a>
                            </li>

                            <li>
                                <a href="?category=Education%20%26%20Others">
                                    <span>Education</span>
                                </a>
                            </li>

                        </ul>

                    </div>


                    <!-- ADMISSION -->

                    <div class="course-widget">

                        <div class="admission-box">

                            <h4>
                                Admissions Open
                            </h4>

                            <p>
                                Explore our programs and get complete
                                information about admissions and courses.
                            </p>

                            <a
                                href="contact.php"
                                class="edu-btn btn-small"
                            >
                                Enquire Now
                                <i class="icon-4"></i>
                            </a>

                        </div>

                    </div>


                </div>

            </div>


            <!-- =================================================
                 COURSE CONTENT
            ================================================== -->

            <div class="col-lg-9">


                <!-- TOP BAR -->

                <div
                    class="course-topbar d-flex justify-content-between align-items-center flex-wrap gap-3"
                >

                    <div class="course-result-title">

                        <h3>
                            Explore Our Programs
                        </h3>

                        <p>

                            <?php if ($search !== '' || $selectedCategory !== ''): ?>

                                <strong>
                                    <?= $totalCourses; ?>
                                </strong>

                                courses found

                            <?php else: ?>

                                Showing
                                <strong>
                                    <?= $totalCourses; ?>
                                </strong>
                                available programs

                            <?php endif; ?>

                        </p>

                    </div>


                    <!-- SORT -->

                    <div class="course-sort">

                        <select
                            onchange="sortCourses(this.value)"
                        >

                            <option value="">
                                Sort Courses
                            </option>

                            <option value="az">
                                A - Z
                            </option>

                            <option value="za">
                                Z - A
                            </option>

                        </select>

                    </div>

                </div>


                <!-- COURSE GRID -->

                <?php if (!empty($displayCourses)): ?>

                    <div
                        class="row g-4"
                        id="courseGrid"
                    >


                        <?php foreach ($displayCourses as $course): ?>

                            <div
                                class="col-md-6 course-item"
                                data-title="<?= htmlspecialchars(strtolower($course['title'])); ?>"
                            >

                                <div class="course-card">


                                    <!-- IMAGE -->

                                    <div class="course-card-image">

                                        <a
                                            href="course-details.php?course=<?= urlencode($course['title']); ?>"
                                        >

                                            <img
                                                src="<?= htmlspecialchars(sse_course_image($course['title'])); ?>"
                                                alt="<?= htmlspecialchars($course['title']); ?>"
                                                loading="lazy"
                                            >

                                        </a>

                                        <div class="course-image-overlay"></div>


                                        <span class="course-category">

                                            <?= htmlspecialchars($course['category']); ?>

                                        </span>


                                        <span class="course-duration">

                                            <i class="icon-24"></i>

                                            <?= htmlspecialchars($course['duration']); ?>

                                        </span>

                                    </div>


                                    <!-- CONTENT -->

                                    <div class="course-card-content">


                                        <div class="course-type">

                                            <?= htmlspecialchars($course['type']); ?>

                                        </div>


                                        <h4 class="course-card-title">

                                            <a
                                                href="course-details.php?course=<?= urlencode($course['title']); ?>"
                                            >

                                                <?= htmlspecialchars($course['title']); ?>

                                            </a>

                                        </h4>


                                        <p class="course-card-description">

                                            <?= htmlspecialchars($course['description']); ?>

                                        </p>


                                        <!-- META -->

                                        <div class="course-card-meta">

                                            <span>

                                                <i class="icon-24"></i>

                                                <?= htmlspecialchars($course['duration']); ?>

                                            </span>


                                            <span>

                                                <i class="icon-25"></i>

                                                <?= htmlspecialchars($course['type']); ?>

                                            </span>

                                        </div>


                                        <!-- FOOTER -->

                                        <div class="course-card-footer">

                                            <span class="course-open">

                                                <i class="icon-22"></i>

                                                Admission Open

                                            </span>


                                            <a
                                                class="course-details-link"
                                                href="course-details.php?course=<?= urlencode($course['title']); ?>"
                                            >

                                                View Details

                                                <i class="icon-east"></i>

                                            </a>

                                        </div>


                                    </div>

                                </div>

                            </div>

                        <?php endforeach; ?>


                    </div>


                    <!-- =================================================
                         PAGINATION
                    ================================================== -->

                    <?php if ($totalPages > 1): ?>

                        <div class="course-pagination">


                            <?php if ($currentPage > 1): ?>

                                <a
                                    class="wide"
                                    href="?page=<?= $currentPage - 1; ?>&category=<?= urlencode($selectedCategory); ?>&search=<?= urlencode($search); ?>"
                                >

                                    <i class="icon-west"></i>

                                    Previous

                                </a>

                            <?php endif; ?>


                            <?php for ($i = 1; $i <= $totalPages; $i++): ?>

                                <a
                                    href="?page=<?= $i; ?>&category=<?= urlencode($selectedCategory); ?>&search=<?= urlencode($search); ?>"
                                    class="<?= ($i == $currentPage) ? 'active' : ''; ?>"
                                >

                                    <?= $i; ?>

                                </a>

                            <?php endfor; ?>


                            <?php if ($currentPage < $totalPages): ?>

                                <a
                                    class="wide"
                                    href="?page=<?= $currentPage + 1; ?>&category=<?= urlencode($selectedCategory); ?>&search=<?= urlencode($search); ?>"
                                >

                                    Next

                                    <i class="icon-east"></i>

                                </a>

                            <?php endif; ?>


                        </div>

                    <?php endif; ?>


                <?php else: ?>


                    <!-- NO COURSE -->

                    <div class="course-empty">

                        <div class="course-empty-icon">

                            <i class="icon-2"></i>

                        </div>

                        <h3>
                            No Course Found
                        </h3>

                        <p>
                            We couldn't find any course matching
                            your search or selected category.
                        </p>

                        <a
                            href="all-courses.php"
                            class="edu-btn"
                        >

                            View All Courses

                            <i class="icon-4"></i>

                        </a>

                    </div>


                <?php endif; ?>


            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     SORT SCRIPT
========================================================= -->

<script>

function sortCourses(type) {

    const grid = document.getElementById('courseGrid');

    if (!grid) {
        return;
    }

    const items = Array.from(
        grid.querySelectorAll('.course-item')
    );


    items.sort(function(a, b) {

        const titleA = a.getAttribute('data-title');
        const titleB = b.getAttribute('data-title');


        if (type === 'za') {

            return titleB.localeCompare(titleA);

        }


        return titleA.localeCompare(titleB);

    });


    items.forEach(function(item) {

        grid.appendChild(item);

    });

}

</script>


<?php

include('include/footer.php');

?>