@echo off
(
    echo 0
    echo y
) | init.bat

timeout /t 5 /nobreak
call yii.bat
timeout /t 5 /nobreak

