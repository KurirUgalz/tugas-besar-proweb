<?php
 header("Content-Type: text/css");
?>
/* Modern & clean style untuk detail akun */
.input-edit {
  width: 100%;
  padding: 12px 16px;
  margin-bottom: 16px;
  border-radius: 10px;
  border: 1.5px solid #e0e0e0;
  font-size: 17px;
  background: #f9f9f9;
  transition: border 0.2s, box-shadow 0.2s;
  box-shadow: 0 1px 4px rgba(0,0,0,0.03);
}

.input-edit:focus {
  border-color: #27ae60;
  outline: none;
  box-shadow: 0 2px 8px rgba(39, 174, 96, 0.08);
}

.edit-btn {
  background: linear-gradient(90deg, #27ae60 60%, #2ecc71 100%);
  color: #fff;
  border: none;
  padding: 12px 28px;
  border-radius: 8px;
  cursor: pointer;
  font-size: 17px;
  font-weight: 600;
  box-shadow: 0 2px 8px rgba(39, 174, 96, 0.08);
  transition: background 0.2s, transform 0.15s;
}

.edit-btn:hover {
  background: linear-gradient(90deg, #219150 60%, #27ae60 100%);
  transform: translateY(-2px) scale(1.03);
}

.cancel-btn {
  background: #f5f6fa;
  color: #2c3e50;
  border: 1.5px solid #e0e0e0;
  padding: 12px 28px;
  border-radius: 8px;
  cursor: pointer;
  font-size: 17px;
  font-weight: 600;
  margin-left: 10px;
  transition: background 0.2s, color 0.2s, border 0.2s, transform 0.15s;
}

.cancel-btn:hover {
  background: #e74c3c;
  color: #fff;
  border-color: #e74c3c;
  transform: translateY(-2px) scale(1.03);
}

/* Responsive */
@media (max-width: 600px) {
  .input-edit, .edit-btn, .cancel-btn {
    font-size: 15px;
    padding: 10px 16px;
  }
}