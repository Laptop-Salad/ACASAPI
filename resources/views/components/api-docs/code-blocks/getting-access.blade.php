<x-api-docs.code-blocks.wrapper>
<code-block language="python" controls>
import requests
from dotenv import load_dotenv
import os

load_dotenv()

school_id = os.getenv("SCHOOL_ID")
token = os.getenv("TOKEN")
url = "https://asms.amandawallis.com/api/school/" + school_id

headers = {"Authorization": "Bearer " + token}
students = (requests.get(url + "/students", headers = headers).json())
</code-block>
</x-api-docs.code-blocks.wrapper>
