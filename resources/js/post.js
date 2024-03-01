window.onload = () => getPost()

const getPost = () => {
    const id = window.location.pathname.split('/')[2]
    fetch(`/api/posts/${id}`)
        .then(response => response.json())
        .then(data => {

            let post = data.data;

            document.getElementById('title').innerText = post.title;
            document.getElementById('content').innerText = post.content;

            const img = document.createElement('img');
            img.src = `/images/${post.image}`; 
            img.classList.add('absolute', 'h-full', 'w-full', 'object-cover', 'rounded-lg');
            document.getElementById('image').appendChild(img);

            let createdAt = new Date(post.created_at);
            let formattedDate = ("0" + createdAt.getDate()).slice(-2) + '/' + ("0" + (createdAt.getMonth() + 1)).slice(-2) + '/' + createdAt.getFullYear();
            document.getElementById('date').innerText = formattedDate;
        
        })
        .catch(error => {
            console.error('Falha no carregamento do post.');
    });
}
