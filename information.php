<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        switch ($action) {
            case 'Type1':
                $Type = "Starter";
                break;
            case 'Type2':
                $Type = "Duo";
                break;
            case 'Type3':
                $Type = "Family";
                break;
            default:
                echo "Unknown action.";
                break;
        }
    } else {
        echo "No action specified.";
    }
} else {
    echo "Invalid request method.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>Booking Form - Adventure Zoo</title>
</head>
<style>
    body {
        font-family: "Poppins", sans-serif;
        background-color: #f0f8ff;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-image: url("/images/av.jpg");
        background-size: cover;
        background-position: center;
    }

    .form-container {
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 500px;
        animation: fadeIn 0.5s ease-out;
    }

    h1 {
        color: #2c3e50;
        text-align: center;
        margin-bottom: 30px;
        font-size: 28px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    .input-group {
        position: relative;
        margin-bottom: 20px;
        width: 100%;
        /* Ensure input groups are full width */
    }

    .input-group i {
        position: absolute;
        left: 12px;
        top: 50%;
        transform: translateY(-50%);
        color: #7f8c8d;
    }

    .input-group input {
        width: 100%;
        /* Make input fields full width */
        padding: 12px 12px 12px 40px;
        /* Add left padding to account for the icon */
        border: 1px solid #bdc3c7;
        border-radius: 8px;
        font-size: 16px;
        transition: border-color 0.3s ease;
        box-sizing: border-box;
        /* Ensures padding does not affect the width */
    }

    input:focus {
        border-color: #3498db;
        outline: none;
        box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
    }

    button {
        margin-top: 25px;
        padding: 12px;
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 18px;
        font-weight: 500;
        transition: background-color 0.3s ease;
        width: 100%;
        /* Make button full width */
    }

    button:hover {
        background-color: #2980b9;
    }

    .animate-in {
        animation: slideIn 0.5s ease-out forwards;
        opacity: 0;
        transform: translateY(20px);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideIn {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<body>
    <div class="form-container">
        <h1><i class="fas fa-ticket-alt"></i> จองตั๋วสวนสัตว์ Adventure Zoo</h1>
        <form id="inform" action="check.php" method="post">
            <div class="input-group animate-in" style="animation-delay: 0.1s;">
                <i class="fas fa-tag"></i>
                <input type="text" id="type" name="type" value="<?php echo htmlspecialchars($Type); ?>" readonly required>
            </div>
            <div class="input-group animate-in" style="animation-delay: 0.2s;">
                <i class="fas fa-user"></i>
                <input type="text" id="name" name="name" placeholder="ชื่อผู้จอง" required>
            </div>
            <div class="input-group animate-in" style="animation-delay: 0.3s;">
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" placeholder="อีเมล" required>
            </div>
            <div class="input-group animate-in" style="animation-delay: 0.4s;">
                <i class="fas fa-phone"></i>
                <input type="tel" id="phone" name="phone" placeholder="เบอร์โทรศัพท์" required>
            </div>
            <div class="input-group animate-in" style="animation-delay: 0.5s;">
                <i class="fas fa-calendar"></i>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="input-group animate-in" style="animation-delay: 0.6s;">
                <i class="fas fa-users"></i>
                <input type="number" id="guests" name="guests" min="1" max="8" placeholder="จำนวนคน" required>
            </div>
            <button type="submit" class="animate-in" style="animation-delay: 0.7s;"><i class="fas fa-paper-plane"></i> ยืนยันการจอง</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</body>

</html>