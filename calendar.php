<?php
// Get the current month and year
$currentMonth = date('n');
$currentYear = date('Y');

// Get the number of days in the current month
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);

// Get the name of the current month
$monthName = date('F', mktime(0, 0, 0, $currentMonth, 1, $currentYear));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Event Calendar</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2><?php echo $monthName . ' ' . $currentYear; ?></h2>
    <table>
        <tr>
            <th>Sun</th>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
            <th>Sat</th>
        </tr>
        <tr>
            <?php
            $firstDayOfMonth = date('N', mktime(0, 0, 0, $currentMonth, 1, $currentYear));
            $dayOfWeek = 1;
            
            for ($i = 1; $i <= $daysInMonth; $i++) {
                if ($dayOfWeek == 1) {
                    echo '</tr><tr>';
                }

                if ($dayOfWeek < $firstDayOfMonth || $i > $daysInMonth) {
                    echo '<td>&nbsp;</td>';
                } else {
                    echo '<td>' . $i . '</td>';
                    $dayOfWeek++;
                }

                if ($dayOfWeek > 7) {
                    $dayOfWeek = 1;
                }
            }
            ?>
        </tr>
    </table>
</body>
</html>
