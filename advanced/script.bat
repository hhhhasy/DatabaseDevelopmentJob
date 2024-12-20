@echo off

REM 运行 init.bat

(
    echo 0
    echo y
) | init.bat


REM 等待 init.bat 完成
timeout /t 5 /nobreak

REM 执行 yii.bat
call yii.bat

REM 等待 yii.bat 执行完成，假设 yii.bat 完成需要 10 秒（可以根据实际情况调整）
timeout /t 5 /nobreak

echo 执行完成！
