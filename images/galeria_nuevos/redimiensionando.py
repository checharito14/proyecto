import cv2 
import numpy as np 

imagen = cv2.imread("malacate_ultimo.jpg")

img_red = cv2.resize(imagen, (253,159), interpolation=cv2.INTER_AREA)

cv2.imwrite("malacate_ultimo_Red.jpg", img_red)

