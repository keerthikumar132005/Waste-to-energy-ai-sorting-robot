import tensorflow as tf
import numpy as np
from PIL import Image

class WasteClassifier:
    def __init__(self, model_path):
        self.model = tf.keras.models.load_model(model_path)

    def preprocess_image(self, image_path):
        img = Image.open(image_path).resize((224, 224))
        img_array = np.array(img) / 255.0
        img_array = np.expand_dims(img_array, axis=0)
        return img_array

    def classify_waste(self, image_path):
        processed_image = self.preprocess_image(image_path)
        predictions = self.model.predict(processed_image)
        class_id = np.argmax(predictions[0])
        confidence = predictions[0][class_id]
        return class_id, confidence

# Usage example:
# classifier = WasteClassifier("path_to_model.h5")
# print(classifier.classify_waste("test_image.jpg"))
