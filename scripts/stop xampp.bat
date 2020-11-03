@ECHO off

for /F "tokens=3 delims=: " %%H in ('sc query "Apache2.4" ^| findstr "        STATE"') do (
  if /I "%%H" EQU "RUNNING" (
   REM Put your code you want to execute here
   REM For example, the following line
   sc stop "Apache2.4"
  )
)

for /F "tokens=3 delims=: " %%H in ('sc query "mysql" ^| findstr "        STATE"') do (
  if /I "%%H" EQU "RUNNING" (
   REM Put your code you want to execute here
   REM For example, the following line
   sc stop "mysql"
  )
)