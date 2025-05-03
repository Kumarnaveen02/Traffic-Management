<!DOCTYPE html>
<html>
<head>
    <title>AI Traffic Management</title>
</head>
<body>
    <h1>Traffic Signal Time Prediction</h1>

    <form method="POST" action="/predict">
        @csrf
        <label>Enter Vehicle Count:</label>
        <input type="number" name="vehicle_count" required>
        <button type="submit">Predict</button>
    </form>

    @if(isset($data))
        <h3>Suggested Signal Time: {{ $data['signal_time'] }} seconds</h3>
    @endif
</body>
</html>
