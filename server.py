import mysql.connector

# Configura la conexión a la base de datos
db_config = {
    "host": "localhost",
    "user": "'a20220356",
    "password": "weapon21",
    "database": "dbLogin"
}

# Crea una conexión a la base de datos
connection = mysql.connector.connect(**db_config)

from flask import Flask, render_template
app = Flask(__name__)

# Ruta para mostrar los datos en la página HTML
@app.route('/')
def mostrar_datos():
    cursor = connection.cursor()
    cursor.execute("SELECT * FROM vwallusersdata")
    datos = cursor.fetchall()
    
    # Recuperar datos utilizando fetchassoc
    '''datos = []
    row = cursor.fetchone()
    while row is not None:
        datos.append(row)
        row = cursor.fetchone()'''
    cursor.close()


    
    return render_template('mostrarDatos.php', datos=datos)

if __name__ == '__main__':
    app.run()
