Use ffmpeg to create timelapse video

ffmpeg -framerate 30 -pattern_type glob -i "img/planoles_*.jpg" -s:v 1440x1080 -c:v libx264 -crf 17 -pix_fmt yuv420p my-timelapse.mp4
