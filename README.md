# HRM UI

Human Resource Management interface built with PHP, Bootstrap 5, and vanilla JavaScript. Provides dedicated admin and employee portals for managing attendance, leave requests, announcements, payroll, recruitment, and events in a modern responsive layout.

## Highlights
- Dual dashboards for administrators (`admin/`) and employees (`user/`).
- Modular PHP includes for headers, footers, navigation, and shared components.
- Bootstrap 5 + Font Awesome UI with custom styles in `include/css/style.css`.
- WebSocket-friendly JavaScript modules inside `include/js/`, designed to avoid polling.
- Image assets bundled under `assets/image/` for branding and onboarding screens.

## Folder Overview
- `admin/` – Admin pages, reusable layout pieces, and feature-specific JS/CSS.
- `user/` – Employee-facing views mirroring the admin structure.
- `assets/` – Static images used across login, dashboards, and announcements.
- `index.php` – Landing/login screen for the platform.
- `recruitmentform.php` – Public-facing recruitment form.
- `database.sql` – Canonical schema dump; import this to provision MySQL tables.

## Getting Started
1. **Clone** the repository:
   ```bash
   git clone git@github.com:akamaanullah/hrm-ui.git
   cd hrm-ui
   ```
2. **Web server**: Place the project inside your local web root (e.g. `D:\xampp\htdocs\newhrm`) and start Apache + MySQL through XAMPP or a similar stack.
3. **Database**:
   - Create a database (e.g. `hrm`).
   - Import `database.sql` located in the project root via phpMyAdmin or the MySQL CLI.
4. **Configuration**:
   - Update `config/config.php` with your database credentials. Keep this file limited to connection settings.
5. **Access**:
   - Visit `http://localhost/newhrm/admin/` for the admin console.
   - Visit `http://localhost/newhrm/user/` for the employee portal.

## Development Notes
- Build UI components first, then wire them to dynamic data—classes/IDs are unique for easier scripting.
- JavaScript files under `include/js/` are structured to integrate with a WebSocket backend. Avoid introducing `setInterval` polling; extend the existing real-time patterns instead.
- When updating the database schema, add incremental changes in separate `ALTER` scripts alongside `database.sql`.
- Keep commit history clean by staging deliberate changes and documenting significant UI/UX updates in PR descriptions.

## Contributing
1. Create a feature branch from `main`.
2. Make your changes along with relevant UI/UX assets.
3. Run a smoke test in your local environment (admin + user flows).
4. Open a pull request describing the feature, screenshots if UI changes, and mention any schema updates.

---

Need help or found a bug? Open an issue or reach out to the maintainers.

