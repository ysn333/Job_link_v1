<?php
    // Retrieve data from the database



    $success_count = $pdo->query("SELECT COUNT(*) FROM inscription WHERE Status = 'Accepté'")->fetchColumn();
    $total_count = $pdo->query("SELECT COUNT(*) FROM inscription")->fetchColumn();
    if ($total_count > 0) 
        $success_rate = round(($success_count / $total_count) * 100, 2);
    else ;

    $teacher_count = $pdo->query("SELECT COUNT(*) FROM employeur")->fetchColumn();
    $new_student_count = $pdo->query("SELECT COUNT(*) FROM candidate")->fetchColumn();
    ?>