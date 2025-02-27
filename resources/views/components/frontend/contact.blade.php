<section id="contact" class="section bg-light-primary dark:bg-dark-primary">
    <div class="container justify-center items-center mx-auto lg:px-48">
        <div class="flex flex-col items-center text-center">
            <h2 class="section-title">Contact Me</h2>
            <p class="subtitle">
                Lorem Ipsum is simply Lorem Ipsum the printing and typesetting industry printing dummy of the printing
                and typesetting industry.
            </p>
        </div>
        <div class="flex flex-col md:flex-row lg:flex-row lg: md:gap-x-8">
            <div
                class="flex flex-1 flex-col
                items-start
                space-y-8
                mb-12
                lg:mb-0 lg:pt-2">
                <div class="flex flex-col lg:flex-row gap-x-4">
                    <div
                        class="text-accent rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-body text-xl mb-1 ">Have a question? </h4>
                        <p class="text-paragraph mb-1">I am here to help you.</p>
                        <p class="text-accent font-normal"> Email me at Ibrahim80403@gmail.com</p>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row gap-x-4">
                    <div
                        class="text-accent rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>

                    </div>
                    <div>
                        <h4 class="font-body text-xl mb-1 ">My current location</h4>
                        <p class="text-paragraph mb-1">Riyadh, Saudi Arabia</p>
                        <p class="text-accent font-normal">Serving clints wordwide.</p>
                    </div>
                </div>
            </div>
            <form x-data="form" @submit.prevent="submitForm" class="space-y-8 w-full max-w-md">
                <div x-show="showMessage"
                class="p-4 text-sm text-green-800 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                    <div class="max-w-7xl mx-auto" >Thank you for contacting me.</div>
                    </div>
                @csrf
                @method('POST')
                <div class="flex gap-8">
                    <div>
                    <input class="input" type="text" name="name" x-model="form.name" placeholder="Your Name" />
                    <template x-if="errors.name">
                        <span x-show="errors.name" x-text="errors.name[0]" class="text-sm text-red-400"></span>
                    </template>
                    </div>
                    <div>
                    <input class="input" type="email" name="email" x-model="form.email" placeholder="Your Email" />
                    <template x-if="errors.email">
                        <span x-show="errors.email" x-text="errors.email[0]" class="text-sm text-red-400"></span>
                    </template>

                    </div>
                    </div>
                    <textarea name="body" x-model="form.body" class="textarea" placeholder="Your message" spellcheck="false"></textarea>
                    <template x-if="errors.body">
                        <span x-show="errors.body" x-text="errors.body[0]" class="text-sm text-red-400"></span>
                    </template>
                    <button type="submit" class="btn btn-lg bg-red-600 hover:bg-light-tail-500
                     dark:bg-red-600 text-light-secondary dark:text-white
                     dark:hover:bg-light-tail-700 dark:hover:text-dark-navy-100
                     ">Send Message</button>
            </form>
        </div>
    </div>
</section>
