<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>UWM Chess Club Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <header>
        <h1>UWM Chess Club Registration</h1>
        <p>Join the UWM Chess Club to meet other students, play casual games, practice strategy, and participate in club events.</p>
    </header>

    <form action="handle_form.php" method="post">
        <fieldset>
            <legend>Student Information</legend>

            <p>
                <label>First Name:<br>
                    <input type="text" name="first_name" size="30" maxlength="50" required>
                </label>
            </p>

            <p>
                <label>Last Name:<br>
                    <input type="text" name="last_name" size="30" maxlength="50" required>
                </label>
            </p>

            <p>
                <label>UWM Email:<br>
                    <input type="email" name="email" size="35" maxlength="100" required>
                </label>
            </p>

            <p>
                <label>Student Status:<br>
                    <select name="student_status" required>
                        <option value="">Select one</option>
                        <option value="Freshman">Freshman</option>
                        <option value="Sophomore">Sophomore</option>
                        <option value="Junior">Junior</option>
                        <option value="Senior">Senior</option>
                        <option value="Graduate Student">Graduate Student</option>
                        <option value="Other">Other</option>
                    </select>
                </label>
            </p>
        </fieldset>

        <fieldset>
            <legend>Chess Information</legend>

            <p>
                <label>Chess Skill Level:<br>
                    <select name="skill_level" required>
                        <option value="">Select one</option>
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Advanced">Advanced</option>
                        <option value="Tournament Player">Tournament Player</option>
                    </select>
                </label>
            </p>

            <p><strong>Preferred Play Style:</strong></p>
            <p>
                <label><input type="radio" name="play_style" value="Casual Games" required> Casual Games</label><br>
                <label><input type="radio" name="play_style" value="Competitive Matches"> Competitive Matches</label><br>
                <label><input type="radio" name="play_style" value="Both Casual and Competitive"> Both Casual and Competitive</label>
            </p>

            <p><strong>Club Interests:</strong></p>
            <p>
                <label><input type="checkbox" name="interest_strategy" value="Strategy Lessons"> Strategy Lessons</label><br>
                <label><input type="checkbox" name="interest_tournaments" value="Tournaments"> Tournaments</label><br>
                <label><input type="checkbox" name="interest_casual" value="Casual Play"> Casual Play</label><br>
                <label><input type="checkbox" name="interest_online" value="Online Chess"> Online Chess</label>
            </p>

            <p>
                <label>Preferred Meeting Day:<br>
                    <select name="meeting_day" required>
                        <option value="">Select one</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                    </select>
                </label>
            </p>
        </fieldset>

        <fieldset>
            <legend>Additional Information</legend>

            <p>
                <label>Expected Graduation Month:<br>
                    <select name="grad_month">
                        <option value="">Select month</option>
                        <option value="May">May</option>
                        <option value="August">August</option>
                        <option value="December">December</option>
                    </select>
                </label>
            </p>

            <p>
                <label>Expected Graduation Year:<br>
                    <select name="grad_year">
                        <option value="">Select year</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                    </select>
                </label>
            </p>

            <p>
                <label>Why do you want to join the Chess Club?<br>
                    <textarea name="comments" rows="5" cols="50" maxlength="500"></textarea>
                </label>
            </p>
        </fieldset>

        <p>
            <input type="submit" name="submit" value="Submit Registration">
            <input type="reset" value="Clear Form">
        </p>
    </form>

    <p class="view-link"><a href="view_members.php">View registered members</a></p>
    
    <img class="panther-logo" src="panther-logo.png" alt="UWM Milwaukee Panthers logo">
    
    <div class="table-wrap">
    <table>
        <!-- your existing thead/tbody stays exactly the same -->
    </table>
</div>

</div>
</body>
</html>
