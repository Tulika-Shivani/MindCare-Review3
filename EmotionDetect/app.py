from flask import Flask,render_template,request
from textblob import TextBlob
app = Flask(__name__)

@app.route("/",methods=['GET', 'POST'])
def home():
    return render_template("home.html")
    
@app.route("/predict",methods=["GET","POST"])
def predict():
    text = request.form['text']
    blob_text = TextBlob(text)
    tags = blob_text.tags
    sentiment = blob_text.sentiment 
    polarity = sentiment.polarity
    if polarity > 0:
        result = "Positive / Happy"
        image = "happy.gif"
    elif polarity < 0:
        result = "Negative / Sad"
        image = "upset.gif"
    else:
        result = "Neutral"
        image = "satisfied.gif"
    return render_template("result.html",result=result, image = image)

if __name__ == "__main__":
    app.run(debug=True)
























