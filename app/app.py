from flask import Flask, request, jsonify

app = Flask(__name__)

@app.route('/predict', methods=['POST'])
def predict():
    data = request.get_json()
    vehicle_count = data.get('vehicle_count', 0)

    # Simple AI logic: 2 seconds per vehicle
    signal_time = int(vehicle_count) * 2

    return jsonify({'signal_time': signal_time})

if __name__ == '__main__':
    app.run(port=5000)
