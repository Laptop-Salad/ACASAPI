<section class="my-10">
    <h2 class="font-bold text-2xl">Code Examples</h2>
    <hr class="h-px mb-8 mt-2 bg-pine/50 border-0">

    <section id="python" class="space-y-4 my-4">
        <h3 class="font-semibold text-xl">Python</h3>

        <p>
            Here is a simple example of making an API request in python to get all the students of a school.
        </p>

        <x-api-docs.code-blocks.getting-access />

        <p>In the above code we are getting the token and school id from an environment variables Then we are saving the start
            of the url to a variable as that part is repetitive. Then we are constructing our header and putting the token as the value
            of the 'authorization' key. Then we are making a request to get all the students in our school and converting it to JSON.
        </p>
    </section>
</section>
