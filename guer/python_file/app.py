from flask import Flask, render_template
import qrcode

app = Flask(__name__)

@app.route('/')
def home():
    qr = qrcode.QRCode(version=1, box_size=10, border=5)
    qr.add_data("CONTROLE DE PRESENCE !")
    qr.make(fit=True)
    qr_img = qr.make_image(fill="black", back_color="white")
    qr_img.save("qr_code.png")
    return render_template('index.html')

if __name__ == '__main__':
    app.run()