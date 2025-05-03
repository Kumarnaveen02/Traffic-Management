from flask import Flask, render_template, request, jsonify

app = Flask(__name__)

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/predict', methods=['POST'])
def predict():
    data = request.get_json()
    return jsonify({'status': 'success', 'data_received': data})

if __name__ == '__main__':
    app.run(debug=True)
