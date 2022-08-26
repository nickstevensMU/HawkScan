import cv2
import numpy as np
import matplotlib.pyplot as plt
import shutil
import os
import pandas as pd

image = cv2.imread('C:/wamp64/www/droneProject/droneProject/public/uploads/projectImgUploads/dji.JPG')
gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
plt.imshow(gray, cmap='gray')

blur = cv2.GaussianBlur(gray, (11,11), 0)
plt.imshow(blur, cmap='gray')

canny = cv2.Canny(blur, 20, 150, 3)
plt.imshow(canny, cmap='gray')

dilated = cv2.dilate(canny, (1,1), iterations = 10)
plt.imshow(dilated, cmap='gray')
cnt = np.array(int)
(cnt, heirarchy) = cv2.findContours(dilated.copy(), cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_NONE)
rgb = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)
cv2.drawContours(rgb, cnt, -1, (0,255,0), 1)
#2: all contour of contours, 1: contor itself, 0: no contours(none).

plt.imshow(rgb)
filename = 'gooseDet.jpg'
cv2.imwrite(filename, rgb)

#the following code will save and make a dir
#files = ['djiD2.jpg', 'dji.jpg']
#os.mkdir('C:/Users/Nick/Desktop/testfolder')
#for f in files:
#    shutil.copy(f, 'C:/Users/Nick/Desktop/testfolder')


nparrX = []
nparrY = []
for contour in cnt:
    x, y, _, _ = cv2.boundingRect(contour)
    nparrX.append([x])
    nparrY.append([y])
    print(x, y)

arrX = np.array(nparrX)
arrY = np.array(nparrY)

xy = np.append(nparrX, nparrY, axis=1)

print(xy)
#arr = np.array(arr)

xy.tofile('XY.csv', sep = ',')
DF = pd.DataFrame(xy, columns=["xPOS","yPOS"])

DF.to_csv("testXY.csv")

#print(heirarchy) this prints the 23 relationships in contours...
print('Geese in the image: ', len(cnt))
plt.show()

