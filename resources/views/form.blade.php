<!DOCTYPE html>
<html>
<head>
    <title>AI Traffic Management</title>
</head>
<body>
    <h1>AI-Based Traffic Signal Time Calculator</h1>
    <form method="POST" action="/calculate-time">
    @csrf
    <label for="vehicle_count">Vehicle Count:</label>
    <input type="number" name="vehicle_count" required>

    <label for="signal_time">Signal Time:</label>
    <input type="number" name="signal_time" required>

    <button type="submit">Submit</button>
</form>


    @if (session('signal_time'))
        <h3>Calculated Signal Time: {{ session('signal_time') }} seconds</h3>
    @endif
</body>
</html>
