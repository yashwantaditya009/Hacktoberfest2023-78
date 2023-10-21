import requests
from bs4 import BeautifulSoup

# Step 1: Make a request to the website
url = "https://example.com/news"  # Replace with the URL of your choice
response = requests.get(url)
response.raise_for_status()  # This will raise an error if the GET request fails

# Step 2: Parse the website's content with Beautiful Soup
soup = BeautifulSoup(response.content, 'html.parser')

# Step 3: Extract data using Beautiful Soup
# Let's say headlines are wrapped in <h2> tags
headlines = soup.find_all('h2')  # This finds all h2 tags in the page

for headline in headlines:
    print(headline.text)  # Print the text inside each h2 tag
