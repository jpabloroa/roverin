@echo off

D:
cd "\OneDrive\Escritorio\CLASE JAVA\JAVASCRIPT\php\PROYECTOS\ROVERIN\SCRIPTS"

git add src/

git commit -am"Corrección de errores"

git push

echo ***********************************************************
echo ******************** Mixing branches... *******************
echo ***********************************************************

C:
cd "\xampp\htdocs\proyectos\roverin"

git pull

echo ***********************************************************
echo *********************** Updated ! *************************
echo ***********************************************************

rem PowerShell -Command "Add-Type -AssemblyName PresentationFramework;[System.Windows.MessageBox]::Show('Aplicacion actualizada correctamente!')"