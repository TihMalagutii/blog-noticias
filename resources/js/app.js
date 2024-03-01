import './bootstrap';

function click(event) {

    let id = event.target.closest('article').getAttribute('data-id')
    navigation.navigate(`posts/${id}`)

}

let page = 1
let size = 8
let totalPages = 1

const getPosts = () => {

    let container = document.getElementById('container');
    container.innerHTML=null

    fetch(`/api/posts?page=${page}&size=${size}`)
        .then(response => response.json())
        .then(data => {
            data.data.forEach(item => {
    
                const article = document.createElement('article');
                article.setAttribute('data-id', item.id);
                article.classList.add('card', 'cursor-pointer', 'min-w-80', 'max-w-96', 'h-32', 'ml-4', 'mr-4', 'md:ml-0', 'md:mr-0', 'shadow-xl', 'flex', 'flex-row', 'items-center', 'rounded-lg', 'mb-5', 'hover:-translate-y-2', 'hover:shadow-2xl', 'transition-all');
    
                const div1 = document.createElement('div');
                div1.classList.add('w-1/3', 'h-full', 'bg-gray-300', 'rounded-l-lg', 'relative');

                const img = document.createElement('img');
                img.src = `/images/${item.thumb}`; 
                img.classList.add('absolute', 'h-full', 'w-full', 'object-cover', 'rounded-l-lg');

                div1.appendChild(img);
    
                const div2 = document.createElement('div');
                div2.classList.add('w-2/3');
    
                const h1 = document.createElement('h1');
                h1.classList.add('text-[#0DADAE]', 'font-bold', 'text-md', 'ml-4');
                h1.textContent = item.title;
    
                const p = document.createElement('p');
                p.classList.add('ml-4', 'text-[#666666]', 'text-sm');
                p.textContent = item.description;
    
                const span = document.createElement('span');
                span.classList.add('flex', 'justify-end', 'mr-4', 'text-[#0DADAE]', 'font-bold');
                span.textContent = 'LER MAIS';
    
                div2.appendChild(h1);
                div2.appendChild(p);
                div2.appendChild(span);
    
                article.appendChild(div1);
                article.appendChild(div2);
    
                let container = document.getElementById('container');
                container.appendChild(article);
                
                let cards = document.querySelectorAll('.card'); 
    
                cards.forEach(card => {
                    card.addEventListener('click', click);
                });
    
            });
            
            

            totalPages = data.last_page

            if(page == 1 && totalPages > 1) {
                nextPageBtn.removeAttribute('disabled', true)
            }

        })
        .catch(error => {
            console.log(error)
    });
}

let nextPageBtn = document.getElementById('nextPage')
let previousPageBtn = document.getElementById('previousPage')

const nextPage = () => {
    page++
    getPosts()
    if(page == totalPages) {
        nextPageBtn.setAttribute('disabled', true)
    }
    if(page != 1) {
        previousPageBtn.removeAttribute('disabled', true)
    }
}

const previousPage = () => {
    page--
    getPosts()
    if(page == 1) {
        previousPageBtn.setAttribute('disabled', true)
    }
    if(page != totalPages) {
        nextPageBtn.removeAttribute('disabled', true)
    }
}

nextPageBtn.addEventListener('click', nextPage);
previousPageBtn.addEventListener('click', previousPage);

getPosts()
