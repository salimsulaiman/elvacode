      <h3 class="text-lg font-semibold text-slate-800 dark:text-slate-200 my-8">Artikel Populer</h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
          @foreach ($popularArticles as $popularArticle)
              <a href="{{ route('article.show', $popularArticle->slug) }}"
                  class="w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 p-4 rounded-2xl duration-300 ease-in-out">
                  <div class="w-full flex flex-col gap-3 group">
                      <div class="w-full aspect-video rounded-2xl overflow-hidden bg-slate-200 dark:bg-slate-700">
                          <img src="{{ asset('storage/' . $popularArticle->thumbnail) }}"
                              alt="{{ $popularArticle->title }}"
                              class="w-full h-full object-cover object-center group-hover:scale-105 transition-all duration-300 ease-in-out">
                      </div>
                      <h5 class="text-xs w-fit rounded-full text-slate-600 dark:text-slate-300">
                          Tim {{ $popularArticle->author->name }}
                      </h5>
                      <h4
                          class="text-base font-semibold text-slate-800 dark:text-slate-200 group-hover:text-violet-900 dark:group-hover:text-violet-300 line-clamp-2">
                          {{ $popularArticle->title }}
                      </h4>
                      <p class="text-sm text-slate-600 dark:text-slate-400 line-clamp-2 font-medium">
                          {{ $popularArticle->excerpt }}
                      </p>
                      <div class="flex w-full gap-4 items-center">
                          <h5
                              class="text-[10px] px-3 py-1 bg-slate-200 dark:bg-slate-700 w-fit rounded-full text-slate-600 dark:text-slate-300 font-semibold">
                              {{ $popularArticle->category->name }}
                          </h5>
                          <h5 class="text-[10px] w-fit rounded-full text-slate-600 dark:text-slate-300 font-semibold">
                              {{ $popularArticle->published_date ?? '-' }}
                          </h5>
                      </div>
                  </div>
              </a>
          @endforeach
      </div>
