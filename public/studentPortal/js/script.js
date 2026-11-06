document.addEventListener('DOMContentLoaded', () => {
  const sidebar = document.querySelector('.sidebar');
  const menu = document.querySelector('#bars');
  const user = document.querySelector('#user');
  const links = document.querySelector('#user-links');
  if (menu && sidebar) menu.addEventListener('click', () => { const hidden = sidebar.classList.toggle('is-collapsed'); menu.setAttribute('aria-expanded', String(!hidden)); });
  if (user && links) user.addEventListener('click', () => { const open = links.classList.toggle('is-open'); user.setAttribute('aria-expanded', String(open)); });
  document.addEventListener('click', event => { if (links && !event.target.closest('#user') && !event.target.closest('#user-links')) { links.classList.remove('is-open'); user?.setAttribute('aria-expanded', 'false'); } });
  const modal = document.querySelector('.modal');
  const trigger = document.querySelector('[data-bs-target="#exampleModal"]');
  const close = modal?.querySelector('[data-bs-dismiss="modal"]');
  const closeModal = () => { modal?.classList.remove('is-open'); trigger?.focus(); };
  if (trigger && modal) { trigger.removeAttribute('data-bs-toggle'); trigger.addEventListener('click', () => modal.classList.add('is-open')); close?.addEventListener('click', closeModal); modal.addEventListener('click', e => { if (e.target === modal) closeModal(); }); document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); }); }
  const save = document.querySelector('#saveNote'); const title = document.querySelector('#note-h'); const description = document.querySelector('#note-d'); const list = document.querySelector('#notesList');
  if (save && title && description && list) { const key='horizonNotes'; const render=()=>{const notes=JSON.parse(localStorage.getItem(key)||'[]'); list.innerHTML=notes.length?'':'<p class="empty-note">No notes saved yet.</p>'; notes.forEach((n,i)=>{const item=document.createElement('article');item.className='card p-4 note';item.innerHTML=`<h1>${escapeHtml(n.title)}</h1><p>${escapeHtml(n.description)}</p><small>${escapeHtml(n.date)}</small><button class="btn btn-danger deleteNote" data-index="${i}" type="button">Delete</button>`;list.append(item)});}; const escapeHtml=s=>{const el=document.createElement('div');el.textContent=s;return el.innerHTML}; save.addEventListener('click',e=>{e.preventDefault();if(!title.value.trim()||!description.value.trim()){title.focus();return}const notes=JSON.parse(localStorage.getItem(key)||'[]');notes.push({title:title.value.trim(),description:description.value.trim(),date:new Date().toLocaleString()});localStorage.setItem(key,JSON.stringify(notes));title.value='';description.value='';closeModal();render()});list.addEventListener('click',e=>{const button=e.target.closest('.deleteNote');if(!button)return;const notes=JSON.parse(localStorage.getItem(key)||'[]');notes.splice(Number(button.dataset.index),1);localStorage.setItem(key,JSON.stringify(notes));render()});render(); }
});
