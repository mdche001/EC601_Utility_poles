import matplotlib.pyplot as plt
import numpy as np
from darkflow.net.build import TFNet
import cv2
import os
options = {"model": "cfg/yolo_custom.cfg",
			"load": -1,
			"gpu": 1.0}

tfnet2 = TFNet(options)
tfnet2.load_from_ckpt()

image_list = []
label_list = []
path = os.getcwd()
file_path = path + '\\pic'
poles_count = 0
other_count = 0
for item in os.listdir(file_path):
	item_path = file_path + '\\' + item
	newpath = path + '\\boxingImg\\' + item
	item_label = item.split('.')[0]  # cat.0.jpeg

	if os.path.isfile(item_path):
		image_list.append(item_path)
	else:
		raise ValueError('There are unvalid documents in train document.')
	#add labels
	if item_label == 'pole':
		label_list.append(0)
		poles_count += 1
	else:
		label_list.append(1)
		other_count += 1
	original_img = cv2.imread(item_path)
	original_img = cv2.cvtColor(original_img, cv2.COLOR_BGR2RGB)
	results = tfnet2.return_predict(original_img)
	boxing(original_img, results)
	cv2.imwrite(newpath, newImage) 

print('There are %d poles,%d other in training set.' % (poles_count, other_count))





def boxing(original_img , predictions):
	newImage = np.copy(original_img)

	for result in predictions:
		top_x = result['topleft']['x']
		top_y = result['topleft']['y']

		btm_x = result['bottomright']['x']
		btm_y = result['bottomright']['y']

		confidence = result['confidence']
		label = result['label'] + " " + str(round(confidence, 3))

		if confidence > 0.3:
			newImage = cv2.rectangle(newImage, (top_x, top_y), (btm_x, btm_y), (255,0,0), 3)
			newImage = cv2.putText(newImage, label, (top_x, top_y-5), cv2.FONT_HERSHEY_COMPLEX_SMALL , 0.8, (0, 230, 0), 1, cv2.LINE_AA)

	return newImage