/* French locals for flatpickr */
var Flatpickr = Flatpickr || { l10ns: {} };
Flatpickr.l10ns.fr = {};

Flatpickr.l10ns.fr.firstDayOfWeek = 1;

Flatpickr.l10ns.fr.weekdays = {
  shorthand: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"],
  longhand: [
    "Dimanche",
    "Lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi",
  ],
};

Flatpickr.l10ns.fr.months = {
  shorthand: [
    "Jan",
    "Fév",
    "Mar",
    "Avr",
    "Mai",
    "Jun",
    "Jul",
    "Aoû",
    "Sep",
    "Oct",
    "Nov",
    "Déc",
  ],
  longhand: [
    "Janvier",
    "Février",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Août",
    "Septembre",
    "Octobre",
    "Novembre",
    "Décembre",
  ],
};

Flatpickr.l10ns.fr.ordinal = function (nth) {
  if (nth > 1) return "ème";
  return "er";
};

Flatpickr.l10ns.fr.rangeSeparator = " au ";

Flatpickr.l10ns.fr.scrollTitle = "Défiler pour augmenter la valeur";
Flatpickr.l10ns.fr.toggleTitle = "Cliquer pour basculer";

Flatpickr.l10ns.fr.am = "AM";
Flatpickr.l10ns.fr.pm = "PM";

Flatpickr.l10ns.fr.yearAriaLabel = "Année";
Flatpickr.l10ns.fr.time_24hr = true;

Flatpickr.l10ns.fr.dateFormat = "d-m-Y";
Flatpickr.l10ns.fr.altInputFormat = "d-m-Y";
Flatpickr.l10ns.fr.time_24hr = true;

Flatpickr.l10ns.fr.ordinal = function (nth) {
  if (nth === 1) return "er";
  return "ème";
};

if (typeof module !== "undefined") module.exports = Flatpickr.l10ns;
