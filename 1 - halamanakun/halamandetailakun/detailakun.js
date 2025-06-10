function showEditForm() {
  document.getElementById('infoView').style.display = 'none';
  document.getElementById('editForm').style.display = 'block';
  document.getElementById('editNama').value = document.getElementById('nama').textContent;
  document.getElementById('editEmail').value = document.getElementById('email').textContent;
  document.getElementById('editTelepon').value = document.getElementById('telepon').textContent;
}

function saveEdit() {
  document.getElementById('nama').textContent = document.getElementById('editNama').value;
  document.getElementById('email').textContent = document.getElementById('editEmail').value;
  document.getElementById('telepon').textContent = document.getElementById('editTelepon').value;
  document.getElementById('infoView').style.display = 'block';
  document.getElementById('editForm').style.display = 'none';
}

function cancelEdit() {
  document.getElementById('infoView').style.display = 'block';
  document.getElementById('editForm').style.display = 'none';
}