# HawkScan
Web based computer vision AI application that affords users the ability to run a full cycle management of drone image collections.
Includes options to stitch images together and scan resulting orthoimages for objects. Makes use of DroneDeploy API*.

Made using CodeIgniter framework, Python (and various Py. libraries including OpenCV, MatPlotLib, Numpy, etc.), and HTMl/css. Webpage content created from bootstrap studio.
Database config file included in main branch provides simple image stitch examples with object detection, along with sample users (SQL).

Sample flow for a user:
1) log in or create an account with valid .edu address
2) select an upload cycle (full or stitch)
3) upload a valid image set (sequenced) of drone images. must have 60% overlap minimum, 75% and above increases likelihood of success and minimizes error
4) run and process - average wait time for image set of 300 images was calculated to be 10 to 20 minutes depending on internet speed on upload and hardware
5) review results, saved within user's account

Sample walkthroughs/images:
1) detection within imageset of geese. resulting from image set of around 100 images. (taken at Lake Takanassee, NJ)
![gooseDet](https://user-images.githubusercontent.com/33354404/186954971-520fb720-235f-4dfb-b612-6b7436fdd4cf.jpg)

2) website homepage:
![ss+(2022-08-26+at+01 04 32)](https://user-images.githubusercontent.com/33354404/186957127-2133c774-c5c3-42b2-bbff-54b8ec5acc9b.jpg)


3) extensive documentation (implementation planning, requirements, walkthroughs) available:
https://live365monmouth-my.sharepoint.com/:f:/g/personal/s0982306_monmouth_edu/EgCL2j2V4_hOpRLif4bp6jMBIhga2SmbGvvmDy0RUL6Few?e=jchdoc 
