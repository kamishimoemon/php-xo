# 🤝 Contributing to php-xo

Thank you for your interest in contributing to **php-xo**. This engine is more than code — it is an exercise in Object-Oriented clarity, ritual, and fire. If you're here, it's because you feel that too.

Please follow these guidelines when contributing:

---

## 🔥 Philosophy

This project follows a strict design vision:

* No getters.
* Minimize conditionals.
* Separate responsibilities through interfaces.
* Hexagonal architecture (Ports & Adapters).
* Object Thinking over procedural control.

If your contribution goes against this spirit — even if it works — it will likely be rejected.

---

## 🌿 Branches & Modes

Each game mode lives in its own branch:

* `classic` — classic tic-tac-toe
* `deathmatch` — alternative rules

Do not submit pull requests to `main`. Contribute directly to the branch that corresponds to your mode. Each branch is self-contained.

---

## 🥪 Development Setup

1. Clone the repository.
2. Checkout the branch you want to contribute to.
3. Install dependencies:

```bash
composer install
```

4. Run the game:

```bash
php bin/play
```

5. Run tests:

```bash
composer test
```

> If your PR breaks the fire, the fire will burn it.

---

## 🧱 Code Style

* Use [PSR-12](https://www.php-fig.org/psr/psr-12/) as baseline.
* Avoid comments unless they explain *why*, not *what*.
* Let the code speak.
* No frameworks. No facades. No service containers.

---

## 📬 Submitting Pull Requests

* PRs must be focused. One idea per PR.
* Include tests where relevant.
* Explain *why* your change matters in the PR description.
* Feel free to suggest ideas in Discussions first if unsure.

---

## 🔗 Sacred Commitments

If you break the architecture, use control structures carelessly, or introduce procedural shortcuts, your PR will be gently turned to ash.
This is a space for ritual, not convenience.

---

📜 **Code as ritual.** 🔥 **Fire as method.**
