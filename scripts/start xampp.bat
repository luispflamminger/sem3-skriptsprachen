@ECHO off

for /F "tokens=3 delims=: " %%H in ('sc query "Apache2.4" ^| findstr "        STATE"') do (
  if /I "%%H" NEQ "RUNNING" (
   REM Put your code you want to execute here
   REM For example, the following line
   sc start "Apache2.4"
  )
)

for /F "tokens=3 delims=: " %%H in ('sc query "mysql" ^| findstr "        STATE"') do (
  if /I "%%H" NEQ "RUNNING" (
   REM Put your code you want to execute here
   REM For example, the following line
   sc start "mysql"
  )
)