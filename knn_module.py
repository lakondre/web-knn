import joblib
import cv2

# Memuat model KNN dari file joblib
knn_model = joblib.load('knn_model.joblib')

def predict_image(image_path):
    img = cv2.imread(image_path, cv2.IMREAD_GRAYSCALE)
    img = cv2.resize(img, (128, 128)).flatten()
    prediction = knn_model.predict([img])
    return 'Cataract' if prediction[0] == 1 else 'Normal'
